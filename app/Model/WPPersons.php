<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WPPersons extends Model
{
    use SoftDeletes;
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
}
