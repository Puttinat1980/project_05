<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class workings extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'workings';
    protected $fillable = [
        'detail','name','image'
    ];
    protected $primaryKey = 'id';

}
