<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'user_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function lists()
    {
        return $this->hasMany(TaskList::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
