<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Event Category model
 * For Event Category eloquent
 * primary key @primaryKey category_id
 * @package App
 */
class EventCategory extends Model
{
    protected $primaryKey = 'category_id';
    protected $fillable = ['name', 'main_category_id'];
    public $timestamps = false;

    /**
     * Get the Main category that owns the category.
     */
    public function mainCategory()
    {
        return $this->belongsTo('App\EventMainCategory', 'main_category_id');
    }
}
