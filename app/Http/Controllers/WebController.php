<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Toastr;
use Auth;
use Spatie\ResponseCache\Facades\ResponseCache;
use Carbon\Carbon;
use App\Models\admin\gallery;


class WebController extends Controller
{
    
    public function home()
    {
        $gallery = DB::table('galleries')->take(3)->get();
        return view('web.index',compact('gallery'));
    }
}
