<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;
use Log;

class DatatableIndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('datatableWCS');             //WCS with custom search input box
    }

    public function getVendorsAjax(Request $request){
        Log::info(json_encode($request->search));
        $data=Vendor::select('id','name','slug','address','email','phone_no','status')->get();
        return ['data'=>$data];
    }
}
