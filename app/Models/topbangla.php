<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class topbangla extends Model
{
    use HasFactory;

    /**
     * @var mixed
     */
protected $tablePrefix = [
    'link',
    'name',
    'image',
    'start_date',
    'end_date',
    'sl',
];
}
