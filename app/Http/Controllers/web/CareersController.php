<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Toastr;
use Auth;
use Spatie\ResponseCache\Facades\ResponseCache;
use Carbon\Carbon;
use App\Models\admin\careers;
use App\Models\web\inquiry;

class CareersController extends Controller
{
    public function view(){
        
        $career = DB::table('careers')->get();
        return view('web.careers',compact('career'));
    }
    public function get($id){
        
        $career_details = DB::table('careers')->where('title',str_replace('-', ' ', $id))->get();
        // dd($career);
        return view('web.careers-inner',compact('career_details'));
    }
    public function store(Request $request){
          
        $rules = [
            'name' => 'required',
            'number' => 'required|min:10',
            'email' => 'required|email',
            'file' => 'required|max:2048',
        ];

        $customMessages = [
            'name.required' => 'Name is required',
            'number.required' => 'Number is required',
            'email.required' => 'Email is required',
        ];

                toastr()->warning('Filed to Upload');
        $this->validate($request, $rules, $customMessages);
        
        if($request->hasfile('file')){
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension(); 
            $filename = time().'.'.$extension;
            $destinationPaths = ('admin/uploads/careers/') ;

            $file->move('admin/uploads/careers/',$filename);
        }else{
            // return $request;
            // $highlights->image = '';
        }
				$student = new inquiry;
                $student->title = $request->input('title');
                $student->careers_id = $request->input('id');
				$student->name = $request->input('name');
				$student->number = $request->input('number');
				$student->path = $destinationPaths;
				$student->file = $filename;
				$student->save();
                toastr()->success('Data has been saved successfully!');
                return redirect('/')->with('success', 'Post Updated');
		
    
    }
}
