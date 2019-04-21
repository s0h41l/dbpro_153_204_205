<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MainCamera
 * @package App\Models
 * @version April 21, 2019, 7:27 am UTC
 *
 * @property string details
 * @property float mega_pixels
 */
class MainCamera extends Model
{
    //use SoftDeletes;

    public $table = 'main_camera';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'details',
        'mega_pixels'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'details' => 'string',
        'mega_pixels' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'details' => 'required',
        'mega_pixels' => 'required'
    ];

    
}
