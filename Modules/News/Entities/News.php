<?php

namespace Modules\News\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function getAllNews()
    {
        return DB::connection('web')->table('news');
    }
}
