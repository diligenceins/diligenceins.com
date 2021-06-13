<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'is_active',
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

    public function role() {
        return $this->belongsTo('App\Models\Role');
    }

    public function reports() {
        return $this->hasMany('App\Models\Report');
    }

    public function isActive() {
        if ($this->is_active === 1 || $this->is_active === '1') {
            return true;
        }
        return false;
    }

    public function isAdmin() {
        if ($this->role->name === 'admin' && $this->isActive()) {
            return true;
        }
        return false;
    }

    public function isEmployee() {
        if ($this->role->name === 'employee' && $this->isActive()) {
            return true;
        }
        return false;
    }

    public function hasAdminAccess() {
        if ($this->isAdmin() || $this->isEmployee()) {
            return true;
        }
        return false;
    }

}
