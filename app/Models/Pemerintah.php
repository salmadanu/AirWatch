<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemerintah extends Model
{
    use HasFactory;
    protected $table = 'pemerintah';
    protected $fillable = ['email_pemerintah', 'username_pemerintah', 'password_pemerintah'];
    protected $guarded = ['id_user_pemerintah'];
    public $timestamps = false;
}
