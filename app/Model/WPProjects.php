<?php
/**
 * Created by PhpStorm.
 * User: Mindziukasss
 * Date: 2017-04-20
 * Time: 7:27 PM
 */

namespace App\Model;


class WPProjects extends BaseModel

{
    /**
     * Table name
     * @var string
     */
    protected $table = 'wp_projects';
    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'clients_id', 'name', 'type', 'description'];
}