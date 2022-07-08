<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;


    protected $fillable = ['firstname', 'lastname', 'details'];

    // public function addCustomer()
    // {
    //     return $this->hasMany(addCustomer::class);
    // }
    

}
