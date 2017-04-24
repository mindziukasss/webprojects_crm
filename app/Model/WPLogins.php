<?php
/**
 * Created by PhpStorm.
 * User: Mindziukasss
 * Date: 2017-04-20
 * Time: 7:19 PM
 */

namespace App\Model;


class WPLogins extends BaseModel
{

    /**
     * Table name
     * @var string
     */
    protected $table = 'wp_logins';
    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'logins_name_id', 'user', 'password', 'login_url'];

}