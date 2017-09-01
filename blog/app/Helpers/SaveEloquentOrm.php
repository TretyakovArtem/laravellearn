<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 01.09.17
 * Time: 10:03
 */

namespace App\Helpers;


use App\Helpers\Contracts\SaveStr;
use App\User;
use Illuminate\Http\Request;

class SaveEloquentOrm implements SaveStr {

    public static function save(Request $request, User $user)
    {
        $obj = new self;

        $data = $obj->checkData($request->only('name', 'text'));

        $user->articles()->create($data);
    }

    public function checkData($array)
    {
        // TODO: Implement checkData() method.
        return $array;
    }

}