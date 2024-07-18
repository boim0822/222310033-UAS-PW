<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskList extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'due_date', 'description', 'task_id'];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
