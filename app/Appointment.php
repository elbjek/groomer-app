<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['title', 'description', 'groomers_id'];
    public function groomers() {
        return $this->hasMany(App\Groomer::class);
    }
}
