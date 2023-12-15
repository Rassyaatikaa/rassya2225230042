<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rassya extends Model
{
    use HasFactory;
    protected $table= "rassya";
    protected $fillable=['Nama','Kelas','Minat'];
    public $timestamps = false;
}
