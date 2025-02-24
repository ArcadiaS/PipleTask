<?php

namespace App\Models;

use Elasticquent\ElasticquentTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, ElasticquentTrait;
    
    
    protected $mappingProperties = [
        'name' => [
            'type' => 'string',
            'analyzer' => 'standard'
        ]
    ];
    
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type_id',
        'is_expert'
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function hasRole(... $roles)
    {
        
        foreach ($roles as $role) {
            if ($this->roles->contains('slug', $role)) {
                return true;
            }
        }
        return false;
    }
    
    public function roles()
    {
        
        return $this->belongsToMany(Role::class);
        
    }
    
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    
}
