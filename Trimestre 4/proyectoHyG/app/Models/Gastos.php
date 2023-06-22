<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gastos extends Model
{
    use HasFactory;
    protected $table='gastos';
    protected $primarykey='id';
    protected $fillable=['fecha','descripcion','valor'];
    protected $guarded=[];
    public $timestamps=false;
}
