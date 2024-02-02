<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected  $guarded = ['id'];

    protected $fillable = [
        'id',
        'module_id',
        'name',
        'slug'
    ];

    public function module(){
        return $this->belongsTo(Module::class);
    }

    public function roles(){
        return $this->belongsToMany(Role::class);
    }
}
