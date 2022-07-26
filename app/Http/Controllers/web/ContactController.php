<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Toastr;
use Auth;
use Spatie\ResponseCache\Facades\ResponseCache;
use Carbon\Carbon;
use App\Models\web\contact;

class ContactController extends Controller
{
    public function store(Request $request){
        
        $rules = [
            'name' => 'required',
            'number' => 'required|min:10',
            'email' => 'required|email',
            'message' => 'required|max:2048',
        ];

        $customMessages = [
            'name.required' => 'Name is required',
            'number.required' => 'Number is required',
            'email.required' => 'Email is required',
            'message.required' => 'Message is required',
        ];

        $this->validate($request, $rules, $customMessages);
        // dd($this);
				$student = new contact;
				$student->name = $request->input('name');
				$student->email = $request->input('email');
				$student->number = $request->input('number');
				$student->message =  $request->input('message');;
				$student->save();
                if($student){
                toastr()->success('Data has been saved successfully!');
                }else{
                toastr()->warning('Filed to Upload');
            }
                return redirect('/contact');
    }
}
