<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Novangelion",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero tempore ipsum rem facere illum ducimus eum officia blanditiis ut, nobis enim esse alias cum commodi ipsam eaque a reprehenderit sequi reiciendis similique eligendi dolorem sint amet. Ducimus odit cupiditate, qui voluptatum neque obcaecati voluptates blanditiis, facere eligendi totam quas illum ut beatae quam. Excepturi soluta accusantium eum. Suscipit voluptates vero culpa, saepe molestiae deserunt repudiandae debitis voluptatum, aspernatur non dolorem numquam beatae. Dolores ipsam dignissimos molestiae dolor, expedita necessitatibus nobis!",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Orion",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero tempore ipsum rem facere illum ducimus eum officia blanditiis ut, nobis enim esse alias cum commodi ipsam eaque a reprehenderit sequi reiciendis similique eligendi dolorem sint amet. Ducimus odit cupiditate, qui voluptatum neque obcaecati voluptates blanditiis, facere eligendi totam quas illum ut beatae quam. Excepturi soluta accusantium eum. Suscipit voluptates vero culpa, saepe molestiae deserunt repudiandae debitis voluptatum, aspernatur non dolorem numquam beatae. Dolores ipsam dignissimos molestiae dolor, expedita necessitatibus nobis!",
        ]
        ];
    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find ($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
