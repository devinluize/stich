<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    use HasFactory;

    protected $table ='addresses';
    protected $fillable=[
        'user_id',
        'city',
        'country',
        'home',
        'postal_code'
    ];
    public function user(){
        return $this->hasMany(User::class);
    }

}
