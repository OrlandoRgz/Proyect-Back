<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';
    protected $fillable=[
        'id',
        'name',
        'grade',
        'career_id'
    ];

    protected $rules = [
        'name' => 'required|string|max:1',
        'grade' => 'required|integer|'
    ];

    public function career (){
        return $this->belongsTo(Career::class);
    }

    public function student (){
        return $this->hasMany(Student::class);
    }
}
