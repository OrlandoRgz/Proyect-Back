<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{

    protected $table = 'careers';
    protected $fillable=[
        'id',
        'name',
        'lavel',
    ];
    protected $rules = [
        'name' => 'required|string|max:150',
        'lavel' => 'required|string|max:3'
    ];

    public function groups(){
        return $this->hasMany(Group::class);
    }

    public function students(){
        return $this->hasMany(Group::class);
    }

}
