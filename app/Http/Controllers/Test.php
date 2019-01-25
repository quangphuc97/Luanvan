<?php
/**
 * Created by PhpStorm.
 * User: QuangPhuc
 * Date: 1/21/2019
 * Time: 2:25 PM
 */

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class Test extends BaseController
{
    public function  index()
    {
        $brands = DB::table('test')->paginate(2);
        return View::make('home',[
            'brands'=>$brands
        ]);
    }
}