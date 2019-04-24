<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TwoG
 * @package App\Models
 * @version April 24, 2019, 6:55 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection devices
 * @property string details
 */
class TwoG extends Model
{
    use SoftDeletes;

    public $table = 'twog';
    
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function devices()
    {
        return $this->hasMany(\App\Models\Device::class);
    }
}
