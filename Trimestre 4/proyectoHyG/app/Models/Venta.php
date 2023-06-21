<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $table='ventas';
    protected $primarykey='id';
    protected $fillable=['fecha','producto','cantidad','precio'];
    protected $guarded=[];
    public $timestamps=false;
}
