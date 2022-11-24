<?php 
namespace App\Models;



class Post 
{
     private static $blog_posts = [
        [
            "title" => "judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "firna maftukhah",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam id a quaerat, esse nisi iusto 
                       deserunt corporis corrupti. Assumenda quidem ipsum quaerat esse qui sunt magni. Ullam itaque 
                       libero quia laudantium nostrum in quisquam adipisci inventore nulla aspernatur, saepe, 
                       voluptatibus officiis molestias voluptas. Ea aliquam illum cumque rerum temporibus odio 
                       dolore neque eligendi qui, consectetur veniam nisi magni? Laborum, sequi id, dolorum magnam, 
                       modi libero odit animi quisquam saepe sed eos totam praesentium minus maiores nihil dignissimos 
                       sit iusto! Natus!"
        ],
        [
            "title" => "judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "afifah fitiya",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quas odit voluptatum voluptas inventore
                       adipisci voluptatem veniam incidunt! Eius velit ducimus quaerat numquam eos saepe sunt consequuntur! 
                       Nemo quae repellendus delectus adipisci at possimus aliquam facere quisquam earum! Repellat laudantium 
                       itaque provident. Repellendus ad iure dolore ducimus rerum voluptas, voluptatibus incidunt magnam 
                       quisquam, ipsum nisi vitae a, eum eveniet cupiditate aliquid similique velit pariatur iusto. Quis magni 
                       unde animi accusantium mollitia corrupti dolore? Ipsa itaque reiciendis molestiae libero! Corrupti 
                       omnis eveniet veritatis ullam, deserunt sapiente quasi, maiores aperiam repudiandae non repellendus! 
                       Ad necessitatibus repellendus quisquam cupiditate repellat explicabo magnam illum!"
        ]
        ];
        
        public static function all()
        {
            return collect(self::$blog_posts);
        }
        public static function find($slug)
        {
            $posts = static::all();
       
            return $posts->firstWhere('slug', $slug);

    } 
}