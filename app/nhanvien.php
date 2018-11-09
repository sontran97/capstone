<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhanvien extends Model
{
    //
    protected $table = "nhanvien";


    public $timestamps = false;
    protected $fillable = ['body'];

    public function khoa()
    {
      return $this->belongsTo('App\khoa','id_khoa','id');
    }
}
