<?php

/**
 * @Author: ELL
 * @Date:   2017-10-24 10:41:34
 * @Last Modified by:   ELL
 * @Last Modified time: 2017-10-25 08:57:36
 */
use \Illuminate\Database\Eloquent\Model as Eloquent;

/**
* 
*/
class Role extends Eloquent
{
	protected $table='role';
	public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable=[
    	'id',
    	'name'
    ];	
}