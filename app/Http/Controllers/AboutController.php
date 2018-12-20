<?php
/**
 * Created by PhpStorm.
 * User: dinhtuan
 * Date: 20/12/2018
 * Time: 21:13
 */

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

class AboutController extends BaseController
{
    public function showContent(){
        return 'About content';
    }

    public function showId($id){
        return 'id: '.$id;
    }
}
