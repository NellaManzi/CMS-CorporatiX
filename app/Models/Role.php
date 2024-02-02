<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected  $guarded = ['id'];

    protected $fillable = [
        'id',
        'name',
        'slug',
        'description',
        'deletable'
    ];

    public function permissions(){
        return $this->belongsToMany(Permission::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }
}
