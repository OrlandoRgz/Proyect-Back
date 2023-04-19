<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralData extends Model
{

    protected $table = 'general_datas';
    protected $fillable =[
        'id',
        'name',
        'surname',
        'email',
        'phone_number',
        'gender',
        'birthdate'
    ];   
    protected $rules = [
        'name' => 'required|string|max:100',
        'surname' => 'required|string|max:150',
        'emai' => 'required|string|max:200',
        'phone_number' => 'required|string|max:10',
        'gender' => 'required|string|max:1',
        'birthdate' => 'required|',
    ];
}
