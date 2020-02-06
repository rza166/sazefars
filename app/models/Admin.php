<?php

namespace App\models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
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
  protected $fillable = [
      'name', 'email', 'password',
  ];
  protected $hidden = [
      'password', 'remember_token',
  ];
  public $timestamps=false;
}
