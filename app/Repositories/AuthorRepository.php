<?php

namespace App\Repositories;

use App\Models\Author;
use App\Repositories\BaseRepository;

/**
 * Class AuthorRepository
 * @package App\Repositories
 * @version October 3, 2020, 12:41 pm UTC
*/

class AuthorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'bio',
        'image'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Author::class;
    }
}
