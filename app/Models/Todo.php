<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Todo extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'todos';

    protected $fillable = [
        'id',
        'description',
        'completed',
    ];
}
