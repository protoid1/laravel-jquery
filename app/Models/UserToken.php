<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserToken extends Model
{
    use HasFactory;

    protected $table = 'user_tokens';
    protected $primaryKey='user_id';
    protected $keyType ='string';
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable =[
        'user_id',
        'token',
    ];
}
