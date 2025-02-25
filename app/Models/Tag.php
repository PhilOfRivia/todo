<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use SoftDeletes;

    protected $table = 'tags';

    protected $fillable = [
        'name'
    ];

    public function task(){
        return $this->belongsTo(Task::class,'tag_id');
    }
}
