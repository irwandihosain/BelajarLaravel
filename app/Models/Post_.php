<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Irwandi hosain",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus pariatur quaerat nisi inventore dignissimos, velit numquam voluptas iusto nemo adipisci similique eius reprehenderit autem earum nihil non dicta tenetur sunt hic quas tempora vel dolor distinctio magni? Modi necessitatibus non odio odit porro consequatur eius alias, velit magnam dolorem? Vel dignissimos animi facere qui a natus necessitatibus in ab quod tenetur, quidem commodi voluptatum laudantium, at quis amet suscipit, sequi modi saepe ut ea! Deleniti ex vitae ad est labore!"
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Irwandi hosain",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus pariatur quaerat nisi inventore dignissimos, velit numquam voluptas iusto nemo adipisci similique eius reprehenderit autem earum nihil non dicta tenetur sunt hic quas tempora vel dolor distinctio magni? Modi necessitatibus non odio odit porro consequatur eius alias, velit magnam dolorem? Vel dignissimos animi facere qui a natus necessitatibus in ab quod tenetur, quidem commodi voluptatum laudantium, at quis amet suscipit, sequi modi saepe ut ea! Deleniti ex vitae ad est labore! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio nostrum eveniet reprehenderit quaerat. Alias porro sit dolor vel repudiandae rem."
    ]
];

    public static function all() 
    {
        return collect(self::$blog_posts);
    }

    public static function find ($slug)
    {
        $posts= static::all();
         return $posts->firstWhere('slug', $slug);
    }
}
