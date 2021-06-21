<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * @var array|mixed|string|null
     */
    private $title;

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }

    public function getRandomPost()
    {
        return Post::inRandomOrder()->limit(1)->get();

    }

}

