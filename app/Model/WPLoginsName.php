<?php
/**
 * Created by PhpStorm.
 * User: Mindziukasss
 * Date: 2017-04-20
 * Time: 7:23 PM
 */

namespace App\Model;


class WPLoginsName extends BaseModel
{

    /**Table name
     * @var string
     */
    protected $table = 'wp_logins_name';
    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name', 'description'];

}