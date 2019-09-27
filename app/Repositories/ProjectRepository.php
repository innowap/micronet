<?php

namespace App\Repositories;

use App\Models\Project;
use App\Repositories\BaseRepository;

/**
 * Class ProjectRepository
 * @package App\Repositories
 * @version September 25, 2019, 12:09 am UTC
*/

class ProjectRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'pages_no',
        'project'
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
        return Project::class;
    }
}
