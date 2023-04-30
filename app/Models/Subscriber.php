<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'status',
    ];

    public static function create(array $attributes = []): static
    {
        $subscriber = new static($attributes);
        $subscriber->save();

        return $subscriber;
    }
//    protected $table = 'subscribers';

}
