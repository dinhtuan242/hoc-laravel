<?php
/**
 * Created by PhpStorm.
 * User: dinhtuan
 * Date: 20/12/2018
 * Time: 20:48
 */

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;


class HomeController extends BaseController
{
    public function showWellcome(){
        return 'Wellcome';
    }

    public function showHome(){
        return view('index');
    }

    public function showProfile($name){
        return  view('prifile') -> with('ten', $name);
    }
}
