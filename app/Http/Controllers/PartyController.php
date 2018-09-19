<?php

namespace App\Http\Controllers;

use App\PartyInfo;
use App\PartyUsage;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PartyController extends Controller
{
    public function party_view(){

        //Budget Usage
        $budget_usage = PartyUsage::all();
        $budget_usage_count = PartyUsage::all()->count();

        $budget_amount = DB::table('party_usages')
            ->select(DB::raw('sum(amount) as total_amount_usage'))
            ->first();

        $graph_usage = DB::table('party_usages')
            ->select('usage_for','amount')
            ->get();

        //Normal View
        $check_participants  = PartyInfo::all()->count();
        $in_perticiparts  = PartyInfo::where('faculty','CS IN')->count();
        $with_perticiparts  = PartyInfo::where('faculty','CS WITH')->count();

        $all_participants = PartyInfo::inRandomOrder()->get();
        $amount_collected = DB::table('party_infos')
            ->select(DB::raw('sum(amount) as total_amount'))
            ->first();
        return view('party.party_view',compact('check_participants','budget_usage_count','budget_amount','graph_usage','budget_usage','all_participants','amount_collected','in_perticiparts','with_perticiparts'));
    }

    public function party_store_view(){
        $budget_usage = PartyUsage::all();
        $budget_usage_count = PartyUsage::all()->count();

        $budget_amount = DB::table('party_usages')
            ->select(DB::raw('sum(amount) as total_amount_usage'))
            ->first();

        $check_participants  = PartyInfo::all()->count();
        $all_participants = PartyInfo::inRandomOrder()->get();
        $amount_collected = DB::table('party_infos')
            ->select(DB::raw('sum(amount) as total_amount'))
            ->first();

        return view('party.party_store',compact('check_participants','budget_usage_count','budget_amount','budget_usage','all_participants','amount_collected'));
    }

    public function party_store(Request $request){
        $this->validate($request, array(
            'fullname' => 'required',
            'amount' => 'required',
            'faculty' => 'required',
        ));

        $party_info   = new PartyInfo();
        $party_info->fullname = $request->fullname;
        $party_info->amount = $request->amount;
        $party_info->faculty = $request->faculty;
        $party_info->save();

        $request->session()->flash('success','Payment Successful Received');
        return redirect()->route('admin_add');
    }
    public function party_budget_add(Request $request){
        $this->validate($request, array(
            'usage_for' => 'required',
            'amount' => 'required',
            'total' => 'required',
        ));

        $party_info   = new PartyUsage();
        $party_info->usage_for = $request->usage_for;
        $party_info->amount = $request->amount;
        $party_info->total = $request->total;
        $party_info->save();
        $request->session()->flash('success','Budget Information Successful Added');
        return redirect()->back();
    }
    public function party_delete($id){
        $user = PartyInfo::find($id);

        $user->delete();

        Session::flash('success','Payment Successfully Deleted');
        return redirect()->route('admin_add');
    }
    public function party_budget_delete($id){
        $budget = PartyUsage::find($id);

        $budget->delete();

        Session::flash('success','Budget Successfully Deleted');
        return redirect()->route('admin_add');
    }
}
