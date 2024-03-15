<?php

namespace App\Models;

class Post2
{

   private static  $blog_posts = [
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


        public static function all()
        {

            return collect(self::$blog_posts);

        }

        public static function find($slug)
        {

            $posts = static::all();

        //       $post = [];

        // foreach($posts as $p) {
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);

        }



}
