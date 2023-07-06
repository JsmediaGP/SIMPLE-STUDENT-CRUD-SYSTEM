<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'studentifo' ;
    protected $pimarykey = 'id';
    protected $fillable = ['Firstname', 'Lastname', 'Address', 'Mobile', 'Email'];

    use HasFactory;
}
