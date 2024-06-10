<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }
class Post
{
    private static $blog_blog = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muh. Alif Anhar",
            "isi" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus repudiandae distinctio quo explicabo recusandae minima tenetur laboriosam, dignissimos suscipit nam ullam sit incidunt unde pariatur cum vitae aspernatur sapiente rem blanditiis ipsa, nisi rerum officia quis! In alias labore cumque tempora laborum repellat libero molestias. Esse ratione, voluptates veniam voluptatibus quos magnam impedit, dolor facilis reprehenderit iure earum porro error consequuntur inventore voluptatem suscipit recusandae at perspiciatis nam nulla itaque eaque rerum ullam? Sunt blanditiis optio aperiam dignissimos aspernatur velit dolorum possimus, delectus obcaecati eius sed voluptatibus dicta repellendus tempora nemo ducimus provident! Praesentium sunt provident eius quis in tempora!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Leaf tempest",
            "isi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet consectetur maiores eum veritatis mollitia atque blanditiis fuga quis repellendus dolor doloremque nobis ducimus iure, laboriosam, praesentium illum culpa aperiam fugit modi optio provident! Explicabo magnam, in nihil dolorem ex nesciunt veritatis ad nisi consequuntur vero esse iure eaque suscipit repellendus!"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_blog);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);

    }
}

