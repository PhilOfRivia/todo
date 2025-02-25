<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    protected $table = 'tasks';

    protected $fillable = [
        'name', 
        'description', 
        'deadline', 
        'compleated_at',
        'list_id',
        'attachments'
    ];

    public function tags(){
        return $this->hasMany(Tag::class,'task_id');
    }
}
