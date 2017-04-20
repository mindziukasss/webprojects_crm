<?php
/**
 * Created by PhpStorm.
 * User: Mindziukasss
 * Date: 2017-04-20
 * Time: 7:33 PM
 */

namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WPProjectsPersonsTypes extends Model
{
    use SoftDeletes;
    /**
     * Table name
     * @var string
     */
    protected $table = 'wp_projects_persons_types';
    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name', 'description'];
}