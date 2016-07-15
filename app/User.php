<?php
namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Twit;
use App\User;
class User extends Authenticatable
{
/**
* The attributes that are mass assignable.
*
* @var array
*/
public function twits()
{
	return $this->hasMany(Twit::class);
}
public function followers()
{
	return $this->belongsToMany('App\User', 'followers', 'user_id', 'follow_id')->withTimestamps();
}
public function following()
{
	return $this->belongsToMany('App\User', 'followers', 'follow_id', 'user_id')->withTimestamps();
}
protected $fillable = [
  'name','email', 'password','username','surname','profilephoto','coverphoto',
];
/**
* The attributes that should be hidden for arrays.
*
* @var array
*/
protected $hidden = [
'password', 'remember_token',
];

public function setPasswordAttribute($password)
    {   
        $this->attributes['password'] = bcrypt($password);
    }



}