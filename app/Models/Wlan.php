<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Wlan
 * @package App\Models
 * @version April 21, 2019, 9:09 am UTC
 *
 * @property string details
 */
class Wlan extends Model
{
    //use SoftDeletes;

    public $table = 'connectivity_wlan';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'details'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'details' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'details' => 'required'
    ];

    
}
