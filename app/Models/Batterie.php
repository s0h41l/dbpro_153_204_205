<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Batterie
 * @package App\Models
 * @version April 21, 2019, 8:25 am UTC
 *
 * @property string details
 * @property float capacity
 */
class Batterie extends Model
{
    //use SoftDeletes;

    public $table = 'battery';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'details',
        'capacity'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'details' => 'string',
        'capacity' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'details' => 'required',
        'capacity' => 'required'
    ];

    
}
