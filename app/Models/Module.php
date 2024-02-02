<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected  $guarded = ['id'];

    protected $fillable = [
        'id',
        'name'
    ];

    public function permissions(){
        return $this->hasMany(Permission::class);
    }
}
