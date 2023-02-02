<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Articulo
 *
 * @property $id
 * @property $codigo
 * @property $nombre
 * @property $precio
 * @property $descripcion
 * @property $stock
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Articulo extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'precio' => 'required',
		'descripcion' => 'required',
		'stock' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','nombre','precio','descripcion','stock','estado'];



}
