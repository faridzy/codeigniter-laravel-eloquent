<?php

/**
 * @Author: ELL
 * @Date:   2017-10-24 09:42:12
 * @Last Modified by:   ELL
 * @Last Modified time: 2017-10-26 00:30:11
 */

use \Illuminate\Database\Eloquent\Model as Eloquent;

/**
* 
*/
class User extends Eloquent
{
	protected $table='user';
	public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable=[
    	'id',
    	'name',
    	'username',
    	'password',
    	'las_login',
    	'role_id'
    ];

    public function getRole(){
    	return $this->hasOne('Role','id','role_id');
    }
	
}