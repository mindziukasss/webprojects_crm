<?php
/**
 * Created by PhpStorm.
 * User: Mindziukasss
 * Date: 2017-04-20
 * Time: 7:37 PM
 */

namespace App\Model;



class WPProjectsPersonsTypesConnections extends BaseModel
{
    /**Table name
     * @var string
     */
    protected $table = 'wp_projects_persons_types_connections';
    /**
     * Fields which will be manipulated
     * @var array
     * employe_types_id is wp_projects_persons_types table id.
     */
    protected $fillable =['id', 'projects_id', 'persons_id', 'employe_types_id', 'comment'];
}