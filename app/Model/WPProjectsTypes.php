<?php
/**
 * Created by PhpStorm.
 * User: Mindziukasss
 * Date: 2017-04-20
 * Time: 7:45 PM
 */

namespace App\Model;



class WPProjectsTypes extends BaseModel

{

    /**
     * Table name
     * @var string
     */
    protected $table = 'wp_projects_types';
    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'project_id', 'name', 'types', 'description'];
}