<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Specify the fields that are mass assignable
    protected $fillable = [
        'title',
        'description',
        'due_date',
        'priority',
        'assigned_by',
        'assigned_to',
        'status',
    ];

    protected $casts = [
        'due_date' => 'datetime', // Ensure 'due_date' is cast to a Carbon instance
    ];

    public function user()
{
    return $this->belongsTo(User::class);
}

public function assignedBy()
{
    return $this->belongsTo(User::class, 'assigned_by');
}

public function assignedTo()
{
    return $this->belongsTo(User::class, 'assigned_to');
}


}
