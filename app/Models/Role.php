<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function admins()
    {
        return $this->belongsToMany(Admin::class,'role_admin','role_id', 'admin_id' );
    }
}
