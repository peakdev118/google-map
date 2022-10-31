<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usersinfo extends Model
{
    use HasFactory;

    protected $table = 'usersinfo';
    public $timestamps = false;

    protected $fillable = [
        'userid', 
        'nric',
        'contact',
        'address1',
        'address2',
        'postcode',
        'district' ,
        'agent',
        'latitude',
        'longitude',
        'application_number',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
