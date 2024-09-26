<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $table = 'tbl_class';
    protected $primaryKey = 'id_class';
    protected $fillable = [
        'nama_class',
    ];

    public function student()
    {
        return $this->hasMany('App\Student','id_class');
    } 

    public function teacher()
    {
        return $this->hasOne('App\Teacher','id_class');
    }  
}
