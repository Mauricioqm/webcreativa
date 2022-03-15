<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tarea
 *
 * @property $id
 * @property $nombre
 * @property $fecha_inicio
 * @property $fecha_fin
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tarea extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'fecha_inicio' => 'required',
		'fecha_fin' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','fecha_inicio','fecha_fin','estado'];



}
