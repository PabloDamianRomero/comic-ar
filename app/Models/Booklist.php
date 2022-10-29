<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booklist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'classification', 'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function volumes(){
        return $this->belongsToMany(Volume::class)->withTimestamps();
    }
}
