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
use Ramsey\Uuid\Uuid;

class BaseModel extends Model
{
    use SoftDeletes;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * Boot function from laravel.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) $model->generateNewId();
        });
    }

    public function generateNewId()
    {
        if (isset($this->attributes['id'])) {
            return $this->attributes['id'];
        }

        return Uuid::uuid4();
    }

}