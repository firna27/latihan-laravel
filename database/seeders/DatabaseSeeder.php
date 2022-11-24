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
          //  'name' => 'Firna Maftukhah',
            // 'email' => 'firnamaftukhah2756@gmail.com',
            // 'password' => bcrypt('12345')
        // ]);

        // User::create([
           // 'name' => 'Afifah Fitiya',
            // 'email' => 'Afifah27@gmail.com',
            // 'password' => bcrypt('54321')
        // ]);

          User::factory(3)->create();

         Category::create([
             'name' => 'Web Programming',
             'slug' => 'Web-Programming'
         ]);
         Category::create([
            'name' => 'Web Design',
            'slug' => 'Web-Design'
        ]);
         Category::create([
             'name' => 'Personal',
             'slug' => 'personal'
         ]); 

        Post::factory(20)->create();

         // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur 
        //     adipisicing elit. Aut voluptatem autem 
        //     quod repellendus nostrum sequi quibusdam 
        //     porro illum consequatur',
        //     'body' => 'commodi perspiciatis
        //     nesciunt doloremque odio ratione minus non 
        //     impedit itaque, cupiditate, praesentium 
        //     similique. Vero repellat maiores odit, 
        //     impedit, voluptate illum nemo laborum 
        //     ipsa iste soluta corrupti sapiente mollitia 
        //     laboriosam voluptatem officiis repellendus, 
        //     adipisci esse ex sunt eaque dolore?Impedit, necessitatibus libero repellat 
        //     maiores placeat ex quam, eos officia, dolor 
        //     consequatur modi provident voluptatum vitae 
        //     ipsum perspiciatis sunt distinctio et. 
        //     Excepturi error vel reprehenderit nemo 
        //     voluptas natus esse est rem debitis iusto,</p><p>
        //     necessitatibus illum dolore quos, sequi 
        //     officiis provident? Aperiam quibusdam animi 
        //     quos sequi eveniet doloremque harum repellat 
        //     id magni ullam, eligendi ut accusamus 
        //     molestias? Minima ipsam quod quam rerum esse 
        //     vel!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul ke Dua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur 
        //     adipisicing elit. Aut voluptatem autem 
        //     quod repellendus nostrum sequi quibusdam 
        //     porro illum consequatur',
        //     'body' => 'commodi perspiciatis
        //     nesciunt doloremque odio ratione minus non 
        //     impedit itaque, cupiditate, praesentium 
        //     similique. Vero repellat maiores odit, 
        //     impedit, voluptate illum nemo laborum 
        //     ipsa iste soluta corrupti sapiente mollitia 
        //     laboriosam voluptatem officiis repellendus, 
        //     adipisci esse ex sunt eaque dolore?Impedit, necessitatibus libero repellat 
        //     maiores placeat ex quam, eos officia, dolor 
        //     consequatur modi provident voluptatum vitae 
        //     ipsum perspiciatis sunt distinctio et. 
        //     Excepturi error vel reprehenderit nemo 
        //     voluptas natus esse est rem debitis iusto,</p><p>
        //     necessitatibus illum dolore quos, sequi 
        //     officiis provident? Aperiam quibusdam animi 
        //     quos sequi eveniet doloremque harum repellat 
        //     id magni ullam, eligendi ut accusamus 
        //     molestias? Minima ipsam quod quam rerum esse 
        //     vel!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul ke Tiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur 
        //     adipisicing elit. Aut voluptatem autem 
        //     quod repellendus nostrum sequi quibusdam 
        //     porro illum consequatur',
        //     'body' => 'commodi perspiciatis
        //     nesciunt doloremque odio ratione minus non 
        //     impedit itaque, cupiditate, praesentium 
        //     similique. Vero repellat maiores odit, 
        //     impedit, voluptate illum nemo laborum 
        //     ipsa iste soluta corrupti sapiente mollitia 
        //     laboriosam voluptatem officiis repellendus, 
        //     adipisci esse ex sunt eaque dolore?Impedit, necessitatibus libero repellat 
        //     maiores placeat ex quam, eos officia, dolor 
        //     consequatur modi provident voluptatum vitae 
        //     ipsum perspiciatis sunt distinctio et. 
        //     Excepturi error vel reprehenderit nemo 
        //     voluptas natus esse est rem debitis iusto,</p><p>
        //     necessitatibus illum dolore quos, sequi 
        //     officiis provident? Aperiam quibusdam animi 
        //     quos sequi eveniet doloremque harum repellat 
        //     id magni ullam, eligendi ut accusamus 
        //     molestias? Minima ipsam quod quam rerum esse 
        //     vel!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul ke empat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur 
        //     adipisicing elit. Aut voluptatem autem 
        //     quod repellendus nostrum sequi quibusdam 
        //     porro illum consequatur',
        //     'body' => 'commodi perspiciatis
        //     nesciunt doloremque odio ratione minus non 
        //     impedit itaque, cupiditate, praesentium 
        //     similique. Vero repellat maiores odit, 
        //     impedit, voluptate illum nemo laborum 
        //     ipsa iste soluta corrupti sapiente mollitia 
        //     laboriosam voluptatem officiis repellendus, 
        //     adipisci esse ex sunt eaque dolore?Impedit, necessitatibus libero repellat 
        //     maiores placeat ex quam, eos officia, dolor 
        //     consequatur modi provident voluptatum vitae 
        //     ipsum perspiciatis sunt distinctio et. 
        //     Excepturi error vel reprehenderit nemo 
        //     voluptas natus esse est rem debitis iusto,</p><p>
        //     necessitatibus illum dolore quos, sequi 
        //     officiis provident? Aperiam quibusdam animi 
        //     quos sequi eveniet doloremque harum repellat 
        //     id magni ullam, eligendi ut accusamus 
        //     molestias? Minima ipsam quod quam rerum esse 
        //     vel!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
