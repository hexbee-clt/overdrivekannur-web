<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Toastr;
use Auth;
use Spatie\ResponseCache\Facades\ResponseCache;
use Carbon\Carbon;
use App\Models\web\careers;

class CareersController extends Controller
{
   public function view(){
    $careers = DB::table('careers')->get();
    // dd($careers);  
    return view('admin.view-careers',compact('careers'));

   }
    public function list(){
        $careers = DB::table('careers')->get();
        // dd($contacts);  
        return view('admin.add-careers',compact('careers'));
    }
    public function store(Request $request){
        // dd($req  uest);
        $gallery = new careers();
        $gallery->title = $request->input('title');
        $gallery->location = $request->input('location');
        $gallery->category = $request->input('category');
        $gallery->payfrom = $request->input('payfrom');
        $gallery->payto = $request->input('payto');
        $gallery->description = $request->input('description');
        $gallery->save();
        toastr()->success('Data has been added successfully!');
        return redirect('view-careers');
    }
    public function update(Request $request,$id){ 
        // dd($req  uest);
        $gallery = careers::find($id);
        $gallery->title = $request->input('title');
        $gallery->location = $request->input('location');
        $gallery->category = $request->input('category');
        $gallery->payfrom = $request->input('payfrom');
        $gallery->payto = $request->input('payto');
        $gallery->description = $request->input('description');
        $gallery->save();
        toastr()->success('Data has been added successfully!');
        return redirect('view-careers');
    }
    public function edit($id){
        $careers = DB::table('careers')->where('id',$id)->get();
        return view('admin.careers-edit',compact('careers'));
    }
    public function delete($id){
        $contacts = DB::table('careers')->where('id',$id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return back();
    }
}
