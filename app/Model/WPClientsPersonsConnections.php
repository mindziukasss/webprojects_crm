<?php
/**
 * Created by PhpStorm.
 * User: Mindziukasss
 * Date: 2017-04-20
 * Time: 7:03 PM
 */

namespace App\Model;


class WPClientsPersonsConnections extends BaseModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'wp_clients_persons_connections';

    /**
     * Fields which will be manipulated
     * @var array
     */

    protected $fillable = ['id', 'clients_id', 'person_id', 'clients_persons_type_id', 'comment'];
}