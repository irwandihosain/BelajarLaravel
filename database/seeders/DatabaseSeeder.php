<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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
        //     'name' => 'irwandi hosain',
        //     'email' => 'irwandihosain@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'denny febrian',
        //     'email' => 'dennyfebrian@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'Personal',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'ipsum dolor sit amet consectetur adipisicing elit. Culpa vel odit corporis atque hic iure quasi assumenda repellat saepe, au',
        //     'body' => ' ipsum dolor sit amet consectetur adipisicing elit. Culpa vel odit corporis atque hic iure quasi assumenda repellat saepe, aut quidem ratione provident qui commodi reprehenderit rerum, et esse. Minima mollitia dicta minus doloribus molestiae asperiores quidem, eum nisi nostrum quae ea quasi facilis dolores voluptate ab. Reprehenderit sed suscipit nihil deserunt magnam, delectus dolorem numquam maxime itaque quam quod iure. Suscipit repellendus saepe dolorum vero sunt error dolorem odit ad totam, doloremque, sapiente nihil facilis perspiciatis tempore ut voluptas dolores porro. Corporis ess. consequatur itaque. Tempore non nobis fuga. Ipsum dicta placeat harum sapiente totam officiis in! Aperiam cupiditate deserunt sint delectus ea quo, iste doloribus, labore ullam maxime facere nihil, aliquid magni cum vel temporibus nam laboriosam. Exercitationem consectetur vero optio, reprehenderit quidem totam cumque autem nisi ut eos debitis animi ea officiis dolore explicabo ducimus illo pariatur tempora. Porro, ea! Ut libero laborum non, dignissimos dolores illo. consequatur itaque. Tempore non nobis fuga. Ipsum dicta placeat harum sapiente totam officiis in! Aperiam cupiditate deserunt sint delectus ea quo, iste doloribus, labore ullam maxime facere nihil, aliquid magni cum vel temporibus nam laboriosam. Exercitationem consectetur vero optio, reprehenderit quidem totam cumque autem nisi ut eos debitis animi ea officiis dolore explicabo ducimus illo pariatur tempora. Porro, ea! Ut libero laborum non, dignissimos dolores illo.'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'ipsum dolor sit amet consectetur adipisicing elit. Culpa vel odit corporis atque hic iure quasi assumenda repellat saepe, au',
        //     'body' => ' ipsum dolor sit amet consectetur adipisicing elit. Culpa vel odit corporis atque hic iure quasi assumenda repellat saepe, aut quidem ratione provident qui commodi reprehenderit rerum, et esse. Minima mollitia dicta minus doloribus molestiae asperiores quidem, eum nisi nostrum quae ea quasi facilis dolores voluptate ab. Reprehenderit sed suscipit nihil deserunt magnam, delectus dolorem numquam maxime itaque quam quod iure. Suscipit repellendus saepe dolorum vero sunt error dolorem odit ad totam, doloremque, sapiente nihil facilis perspiciatis tempore ut voluptas dolores porro. Corporis ess. consequatur itaque. Tempore non nobis fuga. Ipsum dicta placeat harum sapiente totam officiis in! Aperiam cupiditate deserunt sint delectus ea quo, iste doloribus, labore ullam maxime facere nihil, aliquid magni cum vel temporibus nam laboriosam. Exercitationem consectetur vero optio, reprehenderit quidem totam cumque autem nisi ut eos debitis animi ea officiis dolore explicabo ducimus illo pariatur tempora. Porro, ea! Ut libero laborum non, dignissimos dolores illo. consequatur itaque. Tempore non nobis fuga. Ipsum dicta placeat harum sapiente totam officiis in! Aperiam cupiditate deserunt sint delectus ea quo, iste doloribus, labore ullam maxime facere nihil, aliquid magni cum vel temporibus nam laboriosam. Exercitationem consectetur vero optio, reprehenderit quidem totam cumque autem nisi ut eos debitis animi ea officiis dolore explicabo ducimus illo pariatur tempora. Porro, ea! Ut libero laborum non, dignissimos dolores illo.'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-Ketiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'excerpt' => 'ipsum dolor sit amet consectetur adipisicing elit. Culpa vel odit corporis atque hic iure quasi assumenda repellat saepe, au',
        //     'body' => ' ipsum dolor sit amet consectetur adipisicing elit. Culpa vel odit corporis atque hic iure quasi assumenda repellat saepe, aut quidem ratione provident qui commodi reprehenderit rerum, et esse. Minima mollitia dicta minus doloribus molestiae asperiores quidem, eum nisi nostrum quae ea quasi facilis dolores voluptate ab. Reprehenderit sed suscipit nihil deserunt magnam, delectus dolorem numquam maxime itaque quam quod iure. Suscipit repellendus saepe dolorum vero sunt error dolorem odit ad totam, doloremque, sapiente nihil facilis perspiciatis tempore ut voluptas dolores porro. Corporis ess. consequatur itaque. Tempore non nobis fuga. Ipsum dicta placeat harum sapiente totam officiis in! Aperiam cupiditate deserunt sint delectus ea quo, iste doloribus, labore ullam maxime facere nihil, aliquid magni cum vel temporibus nam laboriosam. Exercitationem consectetur vero optio, reprehenderit quidem totam cumque autem nisi ut eos debitis animi ea officiis dolore explicabo ducimus illo pariatur tempora. Porro, ea! Ut libero laborum non, dignissimos dolores illo. consequatur itaque. Tempore non nobis fuga. Ipsum dicta placeat harum sapiente totam officiis in! Aperiam cupiditate deserunt sint delectus ea quo, iste doloribus, labore ullam maxime facere nihil, aliquid magni cum vel temporibus nam laboriosam. Exercitationem consectetur vero optio, reprehenderit quidem totam cumque autem nisi ut eos debitis animi ea officiis dolore explicabo ducimus illo pariatur tempora. Porro, ea! Ut libero laborum non, dignissimos dolores illo.'
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'excerpt' => 'ipsum dolor sit amet consectetur adipisicing elit. Culpa vel odit corporis atque hic iure quasi assumenda repellat saepe, au',
        //     'body' => ' ipsum dolor sit amet consectetur adipisicing elit. Culpa vel odit corporis atque hic iure quasi assumenda repellat saepe, aut quidem ratione provident qui commodi reprehenderit rerum, et esse. Minima mollitia dicta minus doloribus molestiae asperiores quidem, eum nisi nostrum quae ea quasi facilis dolores voluptate ab. Reprehenderit sed suscipit nihil deserunt magnam, delectus dolorem numquam maxime itaque quam quod iure. Suscipit repellendus saepe dolorum vero sunt error dolorem odit ad totam, doloremque, sapiente nihil facilis perspiciatis tempore ut voluptas dolores porro. Corporis ess. consequatur itaque. Tempore non nobis fuga. Ipsum dicta placeat harum sapiente totam officiis in! Aperiam cupiditate deserunt sint delectus ea quo, iste doloribus, labore ullam maxime facere nihil, aliquid magni cum vel temporibus nam laboriosam. Exercitationem consectetur vero optio, reprehenderit quidem totam cumque autem nisi ut eos debitis animi ea officiis dolore explicabo ducimus illo pariatur tempora. Porro, ea! Ut libero laborum non, dignissimos dolores illo. consequatur itaque. Tempore non nobis fuga. Ipsum dicta placeat harum sapiente totam officiis in! Aperiam cupiditate deserunt sint delectus ea quo, iste doloribus, labore ullam maxime facere nihil, aliquid magni cum vel temporibus nam laboriosam. Exercitationem consectetur vero optio, reprehenderit quidem totam cumque autem nisi ut eos debitis animi ea officiis dolore explicabo ducimus illo pariatur tempora. Porro, ea! Ut libero laborum non, dignissimos dolores illo.'
        // ]);
    }
}
