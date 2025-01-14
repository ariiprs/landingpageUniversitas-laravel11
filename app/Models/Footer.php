<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Footer extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
    'address',
    'email',
    'gmaps',
    'phone_number',
    'youtube',
    'linkedin',
    'facebook',
    'instagram',
    ];
}
