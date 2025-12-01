<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensajes extends Model
{
    use HasFactory;
    
    protected $table = 'Mensajes'; 
    public $timestamps = false;
    protected $fillable = ['mensaje', 'usuario']; 
}