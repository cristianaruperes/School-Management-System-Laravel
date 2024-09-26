<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'tbl_student';
    protected $primaryKey = 'id_student';
    protected $fillable = [
        'nama_student',
        'id_class',
    ];

    public function classroom()
    {
        return $this->belongsTo('App\Classroom','id_class');
    }
}
