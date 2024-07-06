<?php

namespace App\Models;

class News 
{
    private static $blog_posts = [
        [
            "title" => "judul post pertama",
            "author" => "luthfi",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam nulla fuga minima quas ullam officiis at eum dolor! Itaque sunt nulla saepe similique magni vero cumque aspernatur non perferendis nisi magnam ad fuga, pariatur nostrum officiis ex nesciunt dolorem, quam assumenda vel exercitationem beatae ratione placeat! Placeat, ratione, voluptatem consequatur dolorem voluptates illum quasi animi nemo aperiam quas ipsa incidunt modi molestias quidem et, commodi veniam sunt nesciunt officiis doloremque tempore sapiente! Distinctio, eaque reiciendis? Voluptatem esse quibusdam rerum quis?"
        ],
        [
            "title" => "judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "luthfi 2",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam nulla fuga minima quas ullam officiis at eum dolor! Itaque sunt nulla saepe similique magni vero cumque aspernatur non perferendis nisi magnam ad fuga, pariatur nostrum officiis ex nesciunt dolorem, quam assumenda vel exercitationem beatae ratione placeat! Placeat, ratione, voluptatem consequatur dolorem voluptates illum quasi animi nemo aperiam quas ipsa incidunt modi molestias quidem et, commodi veniam sunt nesciunt officiis doloremque tempore sapiente! Distinctio, eaque reiciendis? Voluptatem esse quibusdam rerum quis?"
        ],
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }
}
