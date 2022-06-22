<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CodigosPostales extends Model
{
    /**
     * Nombre de la tabla
     *
     * @var string
     */
    protected $table = 'codigos_postales';

    /**
     * Nombre de la Conexión
     *
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * Nombre de llave primaria
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Bandera para campos de timestamp
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Campos que no pueden ser llenados masivamente
     *
     * @var array
     */
    protected $guarded = [];
}
