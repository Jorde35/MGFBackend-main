<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model{

    use HasFactory;

    protected $table = 'pedido'; 
    protected $primaryKey = 'id_pedido';

    public $timestamps = false;
    
    protected $fillable = [
        'id_pedido',
        'id_despachador',
        'id_compra',
        'email',
        'precio_pedido',
        'estado',
        'contenido_pedido'
    ];

}
