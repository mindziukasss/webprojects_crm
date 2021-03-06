<?php
/**
 * Created by PhpStorm.
 * User: Mindziukasss
 * Date: 2017-04-20
 * Time: 7:30 PM
 */

namespace App\Model;


class WPProjectsLoginsConnection extends BaseModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'wp_projects_logins_connection';
    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'projects_id', 'logins_id'];

    public function projectsData ()
    {
        return $this->hasMany(WPProjects::class, 'id', 'projects_id');
    }

    public function loginsData ()
    {
        return $this->hasMany(WPLogins::class, 'id', 'logins_id');
    }
}