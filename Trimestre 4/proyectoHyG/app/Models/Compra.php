<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    protected $table='compras';
    protected $primarykey='id';
    protected $fillable=['fecha','proveedor','producto','cantidad','precio'];
    protected $guarded=[];
    public $timestamps=false;
}
