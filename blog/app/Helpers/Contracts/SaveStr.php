<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 01.09.17
 * Time: 9:57
 */

namespace App\Helpers\Contracts;

use Illuminate\Http\Request;
use App\User;


interface SaveStr {

    public static function save(Request $request, User $user);

    public function checkData($array);


}