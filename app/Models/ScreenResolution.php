<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ScreenResolution
 * @package App\Models
 * @version April 21, 2019, 8:27 am UTC
 *
 * @property float height
 * @property float width
 */
class ScreenResolution extends Model
{
    //use SoftDeletes;

    public $table = 'screen_resolution';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'height',
        'width'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'height' => 'float',
        'width' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'height' => 'required',
        'width' => 'required'
    ];

    
}
