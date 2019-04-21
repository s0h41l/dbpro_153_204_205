<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Bluetooth
 * @package App\Models
 * @version April 21, 2019, 9:24 am UTC
 *
 * @property string details
 * @property string version
 */
class Bluetooth extends Model
{
    use SoftDeletes;

    public $table = 'connectivity_bluetooth';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'details',
        'version'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'details' => 'string',
        'version' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'details' => 'required',
        'version' => 'required'
    ];

    
}
