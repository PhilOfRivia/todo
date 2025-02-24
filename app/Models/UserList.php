<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserList extends Model
{
    use SoftDeletes;

    protected $table = 'lists';

    protected $fillable = [
        'name', 
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
