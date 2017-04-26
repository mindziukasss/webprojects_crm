<?php

namespace App\Model;


class WPPersons extends BaseModel
{

    /**
     * Table name
     * @var string
     */
    protected $table = 'wp_persons';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name', 'email', 'phone'];


//    public function clientsPersonsTypesData()
//    {
//        return $this->hasOne(WPClientsPersonsTypes::class, 'id');
//    }

    public function projectsPersonsTypesConnectionsData()
    {
        return $this->hasMany(WPProjectsPersonsTypesConnections::class, 'persons_id', 'id')->with(['projectsData', 'employeTypesData']);
    }

}
