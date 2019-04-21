<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ScreenSize
 * @package App\Models
 * @version April 21, 2019, 8:27 am UTC
 *
 * @property float size
 */
class ScreenSize extends Model
{
    //use SoftDeletes;

    public $table = 'screen_size';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'size'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'size' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'size' => 'required'
    ];

    
}
