<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Book
 * @package App\Models
 * @version October 4, 2020, 1:32 pm UTC
 *
 * @property string $tital
 * @property string $review
 * @property string $cover
 * @property integer $author_id
 */
class Book extends Model
{
    use SoftDeletes;

    public $table = 'books';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'tital',
        'review',
        'cover',
        'author_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tital' => 'string',
        'review' => 'string',
        'cover' => 'string',
        'author_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tital' => 'required',
        'review' => 'required',
        'author_id' => 'required',
    ];

    public function author()
    {
            return $this->belongsTo('App\Models\Author','author_id');
    }
}
