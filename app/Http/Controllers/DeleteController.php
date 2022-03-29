<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\add_farmer;
use Illuminate\Support\Facades\DB;


class DeleteController extends Controller
{
    // public function index(){
    //     $users = DB::select('select * from add_farmers');
    //     return view('farmer-list',['users'=>$users]);
    //     }
        public function destroy($id) {
        // DB::delete('delete from add_farmers where id = ?',[$id]);
        // echo "Record deleted successfully.
        // ";
        // echo 'Click Here to go back.';
        add_farmer::find($id)->delete();
        return redirect()->back();
    }
}
