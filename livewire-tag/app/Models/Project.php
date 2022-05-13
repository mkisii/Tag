<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Cast\String_;

use function PHPSTORM_META\type;

class Project extends Model
{
    use HasFactory;


    const  TABLE = 'projects';

    protected $table = self::TABLE;

    protected $fillable = [
        'name',
        'type',
        'version',
        'user_id',
        'tag_id'

    ];

    public function name(): string_
    {
        return $this->name;

    }

    public function version(): float
    {
        return $this->version;
    }

    

    public function type(): string
    {
        return $this->type;
    }

    public function id():int
    {
        return $this->id;
    }

        /* Relationships */
    public function user ()
    {
        return $this->belongsTo(User::class);
        
    }



    public function tags ()
    {
        return $this->hasMany(Tag::class);
    }

}
