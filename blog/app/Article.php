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


    public function user() {
        return $this->belongsTo('App\User');
    }


}
