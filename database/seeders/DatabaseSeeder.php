<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // User::create([

        //     'name' => 'Demar Naposo',
        //     'email' => 'demarnaposo313@gmail.com',
        //     'password' => bcrypt('123qweasd')

        // ]);

        // User::create([

        //     'name' => 'Waldemar Naposo',
        //     'email' => 'waldemarnaposo313@gmail.com',
        //     'password' => bcrypt('123qweasd')

        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Designer',
            'slug' => 'web-designer'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore voluptatem quasi dolorum voluptatum vitae aspernatur magnam recusandae esse perferendis nulla.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor obcaecati adipisci incidunt. Quibusdam doloremque sunt voluptatum doloribus odio accusantium nam? Delectus dolorem laborum quasi veritatis ex magnam explicabo id, fugit optio consequuntur numquam vitae sapiente? Eligendi aut consequuntur provident maxime, deleniti sint quia nihil, aliquam asperiores recusandae quae veniam eius natus sapiente saepe. Optio rerum debitis, cupiditate architecto tenetur perferendis magnam tempore dicta neque, nobis eligendi iure autem totam! Explicabo delectus atque commodi reiciendis aspernatur aliquam quod quas non praesentium. Dolorum commodi explicabo consequuntur dolor totam aut sequi inventore, iusto eligendi iure in quaerat corporis libero odio, vel facilis vero!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore voluptatem quasi dolorum voluptatum vitae aspernatur magnam recusandae esse perferendis nulla.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor obcaecati adipisci incidunt. Quibusdam doloremque sunt voluptatum doloribus odio accusantium nam? Delectus dolorem laborum quasi veritatis ex magnam explicabo id, fugit optio consequuntur numquam vitae sapiente? Eligendi aut consequuntur provident maxime, deleniti sint quia nihil, aliquam asperiores recusandae quae veniam eius natus sapiente saepe. Optio rerum debitis, cupiditate architecto tenetur perferendis magnam tempore dicta neque, nobis eligendi iure autem totam! Explicabo delectus atque commodi reiciendis aspernatur aliquam quod quas non praesentium. Dolorum commodi explicabo consequuntur dolor totam aut sequi inventore, iusto eligendi iure in quaerat corporis libero odio, vel facilis vero!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore voluptatem quasi dolorum voluptatum vitae aspernatur magnam recusandae esse perferendis nulla.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor obcaecati adipisci incidunt. Quibusdam doloremque sunt voluptatum doloribus odio accusantium nam? Delectus dolorem laborum quasi veritatis ex magnam explicabo id, fugit optio consequuntur numquam vitae sapiente? Eligendi aut consequuntur provident maxime, deleniti sint quia nihil, aliquam asperiores recusandae quae veniam eius natus sapiente saepe. Optio rerum debitis, cupiditate architecto tenetur perferendis magnam tempore dicta neque, nobis eligendi iure autem totam! Explicabo delectus atque commodi reiciendis aspernatur aliquam quod quas non praesentium. Dolorum commodi explicabo consequuntur dolor totam aut sequi inventore, iusto eligendi iure in quaerat corporis libero odio, vel facilis vero!',
        //     'category_id' => 3,
        //     'user_id' => 2
        // ]);


        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore voluptatem quasi dolorum voluptatum vitae aspernatur magnam recusandae esse perferendis nulla.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor obcaecati adipisci incidunt. Quibusdam doloremque sunt voluptatum doloribus odio accusantium nam? Delectus dolorem laborum quasi veritatis ex magnam explicabo id, fugit optio consequuntur numquam vitae sapiente? Eligendi aut consequuntur provident maxime, deleniti sint quia nihil, aliquam asperiores recusandae quae veniam eius natus sapiente saepe. Optio rerum debitis, cupiditate architecto tenetur perferendis magnam tempore dicta neque, nobis eligendi iure autem totam! Explicabo delectus atque commodi reiciendis aspernatur aliquam quod quas non praesentium. Dolorum commodi explicabo consequuntur dolor totam aut sequi inventore, iusto eligendi iure in quaerat corporis libero odio, vel facilis vero!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
