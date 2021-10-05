<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends BaseController
{
    public function index()
    {
        $this->setPageData('Menu','Menu','fas fa-th-list');
        return view('menu.index');

    }

    public function get_data_table(Request $request)
    {
        if($request->ajax())
        {
            
        }else{
            $output = ['status'=>'error','message'=>'unAuthorized Access'];
        }
    }
}
