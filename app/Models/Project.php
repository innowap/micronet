<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Project
 * @package App\Models
 * @version September 25, 2019, 12:09 am UTC
 *
 * @property string title
 * @property integer pages_no
 * @property string project
 */
class Project extends Model
{
    use SoftDeletes;

    public $table = 'projects';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'pages_no',
        'project'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'pages_no' => 'integer',
        'project' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
