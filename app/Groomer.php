<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Groomer extends Authenticatable
{
    protected $fillable = ['first_name', 'last_name', 'username', 'email', 'password', 'client_id'];

    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function appointments ()
    {
        return $this->belongsTo(App\Appointment::class);

    }

    public function clients()
    {
        return $this->hasMany(App\Client::class);
    }
}
