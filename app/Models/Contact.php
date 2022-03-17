<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'frist_name',
        'last_name',
        'email',
        'number', 
        'user_id'
    ];

    public function Users()
    {
        return $this->belongsTo(User::clas, 'user_id');
    }
}
