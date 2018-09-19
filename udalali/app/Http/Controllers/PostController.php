<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item_buy;
use App\item_sell;


class PostController extends Controller
{
    public function getIndex()
    {
        return view('posts.home');
    }

    public function storesell(Request $request)
    {
        $this->validate($request, array(
            'itemname' => 'required|max:255',
            'categoryid' => 'required|min:1|max:2',
            'brand' => 'required|max:255',
            'amount' => 'required|max:255',
            'description' => 'required',
            'location' => 'required|max:150',
            'phone' => 'required|max:20'
        ));


        $postsell = new item_sell;
        $postsell->itemname = $request->itemname;
        $postsell->categoryid = $request->categoryid;
        $postsell->brand = $request->brand;
        $postsell->amount = $request->amount;
        $postsell->location = $request->location;
        $postsell->description = $request->description;
        $postsell->phone = $request->phone;

        $postsell->save();

        $request->session()->flash('success','Your Request Successful Submitted. Wait for reply');

        return redirect()->action('PostController@getIndex');
    }

    public function storebuy(Request $request)
    {
        $this->validate($request, array(
            'itemname' => 'required|max:255',
            'categoryid' => 'required|min:1|max:2',
            'brand' => 'required|max:255',
            'offeramount' => 'required|max:255',
            'description' => 'required',
            'location' => 'required|max:150',
            'phone' => 'required|max:20'
        ));

        $postbuy = new item_buy;
        $postbuy->itemname = $request->itemname;
        $postbuy->categoryid = $request->categoryid;
        $postbuy->brand = $request->brand;
        $postbuy->offeramount = $request->offeramount;
        $postbuy->location = $request->location;
        $postbuy->description = $request->description;
        $postbuy->phone = $request->phone;

        $postbuy->save();

        $request->session()->flash('success','Your Request Successful Submitted. Wait for reply');

        return redirect()->action('PostController@getIndex');
    }

}
