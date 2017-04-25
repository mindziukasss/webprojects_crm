<?php
/**
 * Created by PhpStorm.
 * User: Mindziukasss
 * Date: 2017-04-20
 * Time: 7:03 PM
 */

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class WPClientsPersonsConnections extends Model
{

    public $updated_at = false;

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personData ()
    {
        return $this->hasMany(WPPersons::class, 'id', 'person_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function clientsPersonsTypeData ()
    {
      return $this->hasOne(WPClientsPersonsTypes::class, 'id', 'clients_persons_type_id' );
    }

}