<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Author
 * @package App\Models
 * @version October 3, 2020, 12:41 pm UTC
 *
 * @property string $name
 * @property string $bio
 * @property string $image
 */
class Author extends Model
{
    use SoftDeletes;

    public $table = 'authors';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'bio',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'bio' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'bio' => 'required'
    ];

    public function books()
    {
        return $this->hasMany('App\Models\book');
    }
}
