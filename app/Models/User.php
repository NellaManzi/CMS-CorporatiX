<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use function Filament\Tables\Filters\boolean;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'email',
        'password',
        'status',
        'birth',
        'bio',
        'marital_status',
        'academic_education',
        'phone',
        'branch_line',
        'avatar'
    ];

    protected $hidden = ['password', 'remember_token',];

    protected $casts = ['email_verified_at' => 'datetime', 'last_acess' => 'datetime', 'password' => 'hashed', 'status' => 'boolean'];


    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }

}
