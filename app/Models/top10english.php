<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class top10english extends Model
{
    use HasFactory;

    protected $tablePrefix = [
        'link',
        'name',
        'image',
        'start_date',
        'end_date',
        'sl',
    ];
}
