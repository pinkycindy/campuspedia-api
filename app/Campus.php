<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * Campus model
 * For Campus eloquent
 * primary key @primaryKey campus_id
 * @package App
 */
class Campus extends Model
{
    protected $primaryKey = 'campus_id';
    protected $fillable = ['name', 'web', 'logo'];
    public $timestamps = false;

    public function location() {
        return $this->belongsTo('App\CampusLocation', 'campus_location_id');
    }

}
