<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\add_farmer;


class MemberController extends Controller
{
    public function addData(Request $req){
        $this->validate($req,[
            'serial_no' => 'required',
            'name' => 'required',
            'locality' => 'required',
            'farmers_account' => 'required',
            'farmers_phone' => 'required'
        ]);
        
        add_farmer::create($req->all());
        return back()->with('Data stored successfully!');
    }
}
