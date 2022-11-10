<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class calendar extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'calendar';
    protected $fillable = [
        'name','detail','image'
    ];
    protected $primaryKey = 'id';

}
