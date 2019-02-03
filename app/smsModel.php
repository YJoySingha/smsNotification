<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class smsModel extends Model
{
	protected $table = 'sms';
	protected $primarykey = 'u_id';
	protected $fillable = ['u_name','u_email','u_mNumber','u_password','u_attempt','u_otp','u_verify','u_timer'];
	
}
