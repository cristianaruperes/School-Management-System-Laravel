<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'tbl_teacher';
    protected $primaryKey = 'id_teacher';
    protected $fillable = [
        'nama_teacher',
        'id_class',
    ];

    public function classroom()
    {
        return $this->belongsTo('App\Classroom','id_class');
    }
}
