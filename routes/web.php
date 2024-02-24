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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Waldemar Naposo",
        "email" => "waldemarnaposo313@gmail.com",
        "image" => "demar.jpg"
    ]);
});


Route::get('/blog', function () {

    $blog_posts = [
        [
            "title" => "Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Waldemar Naposo",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam commodi enim consectetur, ex excepturi illum debitis nemo dolore non, esse voluptatem. Quod eius voluptatibus laudantium obcaecati voluptates dolores ipsum ratione nesciunt vitae temporibus laborum, voluptatem officia aut? Dolorem ipsa, cupiditate non impedit iste quas nisi laborum libero fugit autem, deleniti minus explicabo rem fugiat et sed ipsam, fuga aperiam vitae. Praesentium harum quidem asperiores impedit exercitationem! Doloribus sequi molestiae itaque animi maiores, placeat soluta facere excepturi distinctio eaque porro a!"
        ],
        [
            "title" => "Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Waldemar Naposo (lagi)",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam nulla, nostrum accusamus nisi debitis quaerat facere quas, tempora adipisci, itaque minus aspernatur. Consectetur tenetur reiciendis eum iste, quia harum? Nobis provident deleniti esse, quos facere minima perspiciatis quibusdam iste eum laboriosam expedita distinctio inventore delectus! Numquam odio qui culpa fuga nam ipsa incidunt! Illum fuga maiores minima asperiores quisquam ea qui nulla nemo accusamus libero doloremque tempora beatae ipsam quo, enim quod, voluptatibus eaque aperiam inventore atque ipsa unde veniam nostrum iure? Asperiores culpa saepe error aliquid iusto ipsam ex. Totam praesentium, quis hic adipisci magni molestiae dignissimos cum perspiciatis!"

        ]
        ];
    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});


Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Waldemar Naposo",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam commodi enim consectetur, ex excepturi illum debitis nemo dolore non, esse voluptatem. Quod eius voluptatibus laudantium obcaecati voluptates dolores ipsum ratione nesciunt vitae temporibus laborum, voluptatem officia aut? Dolorem ipsa, cupiditate non impedit iste quas nisi laborum libero fugit autem, deleniti minus explicabo rem fugiat et sed ipsam, fuga aperiam vitae. Praesentium harum quidem asperiores impedit exercitationem! Doloribus sequi molestiae itaque animi maiores, placeat soluta facere excepturi distinctio eaque porro a!"
        ],
        [
            "title" => "Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Waldemar Naposo (lagi)",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam nulla, nostrum accusamus nisi debitis quaerat facere quas, tempora adipisci, itaque minus aspernatur. Consectetur tenetur reiciendis eum iste, quia harum? Nobis provident deleniti esse, quos facere minima perspiciatis quibusdam iste eum laboriosam expedita distinctio inventore delectus! Numquam odio qui culpa fuga nam ipsa incidunt! Illum fuga maiores minima asperiores quisquam ea qui nulla nemo accusamus libero doloremque tempora beatae ipsam quo, enim quod, voluptatibus eaque aperiam inventore atque ipsa unde veniam nostrum iure? Asperiores culpa saepe error aliquid iusto ipsam ex. Totam praesentium, quis hic adipisci magni molestiae dignissimos cum perspiciatis!"

        ]
        ];

        $new_post = [];

        foreach($blog_posts as $p) {
            if($p["slug"] === $slug){
                $new_post = $p;
            }
        }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
