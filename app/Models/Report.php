<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'product',
        'version',
        'module',
        'operational_system',
        'priority',
        'severity',
        'status',
        'url',
        'bug_description'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
