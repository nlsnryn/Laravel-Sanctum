<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'name', 'description', 'priority'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
