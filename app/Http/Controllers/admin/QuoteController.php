<?php

namespace App\Http\Controllers\admin;

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
    public function list(){
        // view-quote
        $quote = DB::table('quotes')->get();
        return view('admin.view-quote',compact('quote'));
    }
    public function delete($id){
        $contacts = DB::table('quotes')->where('id',$id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return back();
    }
    
    public function update(Request $request,$id){
        
        $quotes = quote::find($id);
        $quotes->actions = $request->input('action');
        toastr()->success('Data has been saved successfully!');
        $quotes->save();
        return back();
    }
}
