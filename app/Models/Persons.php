<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persons extends Model
{
    use HasFactory;

    protected $fillable = ['Name', 'Email', 'Phone', 'Photo', 'Age', 'Experience', 'Living', 'Education', 'Position'];
}
