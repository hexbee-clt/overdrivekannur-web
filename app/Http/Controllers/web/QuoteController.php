<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Toastr;
use Auth;
use Spatie\ResponseCache\Facades\ResponseCache;
use Carbon\Carbon;
use App\Models\web\quote;

class QuoteController extends Controller
{
    public function store(Request $request){
        
        $quotes = new quote();
        $quotes->name = $request->input('name');
        $quotes->services = $request->input('services');
        $quotes->email = $request->input('email');
        $quotes->number = $request->input('phone');
        $quotes->actions = "Active";
        toastr()->success('Data has been saved successfully!');
        $quotes->save();
        return back();
    }
}
