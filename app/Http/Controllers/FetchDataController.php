<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\add_farmer;
use Illuminate\Support\Facades\DB;
class FetchDataController extends Controller
{
    public function index(){
        // $users = DB::select('select serial_no, id, name, locality, farmers_account, farmers_phone  from add_farmers');
        // return view('farmer-list',['users'=>$users]);
        $users=add_farmer::all();
        return view('farmer-list',compact('users'));
    }
}
