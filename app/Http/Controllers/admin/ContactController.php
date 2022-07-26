<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Toastr;
use Auth;
use Spatie\ResponseCache\Facades\ResponseCache;
use Carbon\Carbon;
use App\Models\admin\contact;

class ContactController extends Controller
{
    public function list(){
        $contacts = DB::table('contacts')->get();
        // dd($contacts);  
        return view('admin.view-contact',compact('contacts'));
    }
    public function delete($id){
        $contacts = DB::table('contacts')->where('id',$id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return back();
    }
}
