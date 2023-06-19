<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    protected $table='producto';
    protected $primarykey='id';
    protected $fillable=['nombre','cantidad','precio_unit'];
    protected $guarded=[];
    public $timestamps=false;
}
