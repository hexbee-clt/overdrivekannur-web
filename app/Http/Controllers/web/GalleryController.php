<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Toastr;
use Auth;
use Spatie\ResponseCache\Facades\ResponseCache;
use Carbon\Carbon;
use App\Models\admin\gallery;

class GalleryController extends Controller
{
    public function view()
    {
        $gallery = DB::table('galleries')->get();
        return view('web.gallery');
    }
    public function galleryinner($id)
    {
        $gallery = DB::table('galleries')->where('title',str_replace('-', ' ', $id))->get();
        // dd($gallery);
        return view('web.single-gallery');
    }
}
