<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $guard = 'admin';
  protected $table = 'admins';

  protected $fillable = ['name','username','mobaile','email',  'password','date_ad','date_up'];
  protected $hidden = [
      'password', 'remember_token',
  ];
  public $timestamps=false;
}
