<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';
    protected $fillable =[
        'id',
        'serial_number',
        'general_data_id',
        'career_id',
        'group_id'
        
    ];

    protected $rules = [
        'serial_number' => 'required|string|max:10'
    ];

    public function general_data (){
        return $this->belongsTo(GeneralData::class);
    }
    public function group (){
        return $this->belongsTo(Group::class);
    }
    public function career (){
        return $this->belongsTo(Career::class);
    }

}
