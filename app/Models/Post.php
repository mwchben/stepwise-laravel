<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $table = 'changeTableName';
    //public $primarykey = 'id';

    protected $fillable = [
        "quote",
        "bywho",
        "description"
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
