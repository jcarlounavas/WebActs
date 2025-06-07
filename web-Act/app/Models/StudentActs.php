<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class StudentActs extends Model
{
    //
    use Notifiable;
    protected $table = 'studs'; 
    public $timestamps = true;
    protected $fillable = ['name', 'email', 'age'];
}
