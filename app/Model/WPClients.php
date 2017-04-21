<?php
/**
 * Created by PhpStorm.
 * User: Mindziukasss
 * Date: 2017-04-20
 * Time: 5:56 PM
 */

namespace App\Model;



class WPClients extends BaseModel

{
    /**
     * table name
     * @var string
     */
   protected $table = 'wp_clients';

    /**
     * Fields which will be manipulated
     * @var array
     */

   protected $fillable = ['id', 'name', 'client_type'];
}