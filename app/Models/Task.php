<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'user_id'
    ];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public static function completed()
    {
        return self::where('is_completed', 1)->get();
    }
}
