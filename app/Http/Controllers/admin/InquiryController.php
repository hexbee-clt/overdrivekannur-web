<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Toastr;
use Auth;
use Spatie\ResponseCache\Facades\ResponseCache;
use Carbon\Carbon;
use App\Models\web\inquiries;

class InquiryController extends Controller
{
    public function list(){
        $inquiry = DB::table('inquiries')->get();
        // dd($careers);  
        return view('admin.view-inquiry',compact('inquiry'));
    }
}
