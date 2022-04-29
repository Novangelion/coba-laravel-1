<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Novangelion",
        "email" => "novangelion@nova.gg",
        "image" => "736321.png",
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
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
    return view('posts',[
        "title" => "Posts",
        "posts" => $blog_posts,
    ]);
});

//single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
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

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});