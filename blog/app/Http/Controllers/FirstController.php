<?php
/**
 * Created by PhpStorm.
 * User: pathfinder
 * Date: 15.07.17
 * Time: 16:18
 */
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class FirstController extends Controller {
    public function show($id) {
        //echo __METHOD__;
        echo $id;
    }
}