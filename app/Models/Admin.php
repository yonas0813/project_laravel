<?php
namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;   
class Admin extends Authenticatable{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at'];
    protected $dates1 = ['updated_at'];
    protected $primaryKey = 'id_admin';
}