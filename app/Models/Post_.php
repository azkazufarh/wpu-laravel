<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            'title' => "Title 1",
            'slug' => 'title-1',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid perferendis expedita nisi consectetur vero dolore quam mollitia, illum ipsa dicta odit voluptatem recusandae enim quae omnis facere iste alias maxime quasi tempora tenetur temporibus hic corporis a. Esse excepturi illo debitis minus alias! Temporibus animi minus amet quia dolorum nihil.'
        ],
        [
            'title' => "Title 2",
            'slug' => 'title-2',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid perferendis expedita nisi consectetur vero dolore quam mollitia, illum ipsa dicta odit voluptatem recusandae enim quae omnis facere iste alias maxime quasi tempora tenetur temporibus hic corporis a. Esse excepturi illo debitis minus alias! Temporibus animi minus amet quia dolorum nihil.'
        ],
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
