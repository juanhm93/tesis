<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'display_name',
        'description',
    ];

    public function user(){
        return $this->hasOne(User::class);
    }

    public function hasRoles(array $roles){

        foreach($roles as $role){
            if($this->role->name === $role){
                return true;
            }
        }
        return false;
    }
}
