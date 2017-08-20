<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    //
    use SoftDeletes;

    protected $primaryKey = 'id';
    public $incrementing = TRUE;

    //public $timestamps = FALSE;

    protected $fillable = ['name', 'text', 'id'];


    protected $guarded = ['*'];

    protected $dates = ['deleted_at'];

    protected $casts = [
        'name' => 'text',
        'text' => 'array'
    ];


    public function user() {
        return $this->belongsTo('App\User');
    }


    public function getNameAttribute($value) {
        return 'Hello '.$value;
    }

    public function setNameAttribute($value) {

        $this->attributes['name'] = '/'.$value.'/';

    }



}
