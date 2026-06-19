<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Order;

#[Fillable([
    'name',
    'email',
    'password',
    'balance'
])]
#[Hidden([
    'password',
    'remember_token'
])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    // GETTERS
    public function getId()
    {
        return $this->attributes['id'];
    }

    public function getName()
    {
        return $this->attributes['name'];
    }

    public function getEmail()
    {
        return $this->attributes['email'];
    }

    public function getRole()
    {
        return $this->attributes['role'];
    }

    public function getBalance()
    {
        return $this->attributes['balance'];
    }

    // SETTERS
    public function setRole($role)
    {
        $this->attributes['role'] = $role;
    }

    public function setBalance($balance)
    {
        $this->attributes['balance'] = $balance;
    }

    public function orders()
{
    return $this->hasMany(Order::class);
}

    public function getOrders()
{
    return $this->orders;
}

    public function setOrders($orders)
{
    $this->orders = $orders;
}
    
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}