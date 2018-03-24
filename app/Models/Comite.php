<?php
/**
 * Model genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comite extends Model
{
    use SoftDeletes;
	
	protected $table = 'comites';
	
	protected $hidden = [
        
    ];

	protected $guarded = [];

	protected $dates = ['deleted_at'];
	/**
     * Get the user that owns upload.
     */
    public function user()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
