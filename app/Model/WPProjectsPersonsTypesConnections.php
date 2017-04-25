<?php
/**
 * Created by PhpStorm.
 * User: Mindziukasss
 * Date: 2017-04-20
 * Time: 7:37 PM
 */

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class WPProjectsPersonsTypesConnections extends Model
{
    protected  $hidden = ['id', 'count', 'created_at', 'updated_at', 'deleted_at'];
    /**Table name
     * @var string
     */
    protected $table = 'wp_projects_persons_types_connections';
    /**
     * Fields which will be manipulated
     * @var array
     * employe_types_id is wp_projects_persons_types table id.
     */
    protected $fillable = ['id', 'projects_id', 'persons_id', 'employe_types_id', 'comment'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function projectsData()
    {
        return $this->hasOne(WPProjects::class, 'id', 'projects_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personsData()
    {
        return $this->hasMany(WPPersons::class, 'id', 'persons_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employeTypesData()
    {
        return $this->hasMany(WPProjectsPersonsTypes::class, 'id', 'employe_types_id');
    }
}