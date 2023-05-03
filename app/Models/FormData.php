<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    use HasFactory;

    protected $fillable = [
        'african_region',
        'country',
        'brief_history',
        'vope_profile',
        'partners',
        'name',
        'position',
        'email',
        'telephone',
        'linkedin_profile',
    ];
}
