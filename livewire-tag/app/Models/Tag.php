<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Cast\String_;

class Tag extends Model
{
    use HasFactory;

    const  TABLE = 'tags';

    protected $table = self::TABLE;

    protected $fillable = [
        'name',
        'slug'
    ];

    public function name(): string_
    {
        return $this->name;

    }

    

    public function slug(): string
    {
        return $this->slug;
    }

    public function id():int
    {
        return $this->id;
    }

    public static function search($search)

    {
        return empty($search) 
        ? static::query()
        : static::query()->where('id', 'like', '%' . $search . '%')
        ->orwhere('name', 'like', '%'. $search . '%');
    }

}
