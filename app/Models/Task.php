<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'list', 'reminder_date', 'category_id'];

    protected $dates = ['reminder_date'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
