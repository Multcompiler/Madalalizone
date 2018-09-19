<?php

namespace App\Http\Controllers;

use App\LukuInfo;
use App\RoomUsers;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;


class LukuController extends Controller
{
    public function view_luku(){
        $months_list = DB::table('luku_infos')
            ->select(DB::raw('MONTH(created_at) as month'))
            ->groupBy('month')
            ->get();

        $room_users = RoomUsers::all();

        $data_charts = DB::table('luku_infos')
            ->select(DB::raw('MONTH(luku_infos.created_at) as month'),DB::raw('sum(luku_infos.amount) as amount'),'luku_infos.user_id','firstname','lastname')
            ->join('room_users', 'luku_infos.user_id', '=', 'room_users.id')
            ->where(DB::raw('MONTH(luku_infos.created_at)'), [date("m")])
            ->groupBy('luku_infos.user_id','room_users.firstname','room_users.lastname','month')
            ->get();


        $max_month_select = DB::table('luku_infos')
            ->select(DB::raw('MONTH(luku_infos.created_at) as month'))
            ->orderBy('month','desc')
            ->groupBy('month')
            ->first();

        if($max_month_select == "" || $max_month_select == null){
            $max_month_select = 1;
        }
        else{
            $users_view = DB::table('luku_infos')
                ->select(DB::raw('MONTH(luku_infos.created_at) as month'),DB::raw('sum(luku_infos.amount) as amount'),'luku_infos.user_id','firstname','lastname')
                ->join('room_users', 'luku_infos.user_id', '=', 'room_users.id')
                ->where(DB::raw('MONTH(luku_infos.created_at)'), [$max_month_select->month])
                ->orderBy('month','desc')
                ->groupBy('luku_infos.user_id','room_users.firstname','room_users.lastname','month')
                ->get();
        }


        $latest_info_check = LukuInfo::all()->count();
        $latest_info = DB::table('luku_infos')->orderBy('id','desc')->first();

       // dd($users_view);

        return view('luku.view',compact('months_list','room_users','data_charts','latest_info','latest_info_check','users_view'));
    }

    public function single_luku_member($id){
        $single_user = LukuInfo::where("user_id",$id)->orderBy("created_at","desc")->get();

        $room_user_details = RoomUsers::where("id",$id)->first();
        return view("luku.single_view",compact('single_user','room_user_details'));
    }
    public function add_luku_info(){
        $users_room = RoomUsers::all();
        return view("luku.add_info",compact('users_room'));
    }

    public function store_luku_info(Request $request){
        $this->validate($request, array(
            'token_number' => 'required|unique:luku_infos|numeric|digits:20',
            'amount' => 'required|numeric',
            'user_id' => 'required|numeric',
            'token_units' => 'required',
            'date_bought' => 'required',
            'proof_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));

        $add_luku   = new LukuInfo();
        $add_luku->user_id = $request->user_id;
        $add_luku->token_number = $request->token_number;
        $add_luku->token_units = $request->token_units;
        $add_luku->amount = $request->amount;
        $add_luku->token_bought_date = $request->date_bought;
        if ($request->hasFile('proof_image')) {
            $image = $request->file('proof_image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('luku/proof');
            $image->move($destinationPath, $name);
            $add_luku->proof_image = $name;
            dd($destinationPath);
            $add_luku->save();

            $request->session()->flash('success','Luku Information Successfully Uploaded');

            return redirect()->back();
        }

    }

    public function add_room(){
        return view("luku.add_rooms_users");
    }
    public function add_room_users(Request $request){
        $this->validate($request, array(
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
        ));

        $add_room_users   = new RoomUsers();
        $add_room_users->firstname = $request->firstname;
        $add_room_users->lastname = $request->lastname;
        $add_room_users->phone = $request->phone;
        $add_room_users->save();

        $request->session()->flash('success','User Information Successfully Added');

        return redirect()->back();
    }
}
