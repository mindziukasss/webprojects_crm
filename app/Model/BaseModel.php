<?php
/**
 * Created by PhpStorm.
 * User: Code Academy
 * Date: 4/21/2017
 * Time: 9:15 AM
 */

namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BaseModel extends Model
{
    use SoftDeletes;
}