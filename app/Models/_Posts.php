<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

// class Posts extends Model
// {
//     // protected $fillable = [
//     //     'title',
//     //     'author',
//     //     'slug',
//     //     'body',
//     // ];
//     // public static function all()
//     // {
//     //     return [
//     //         [
//     //             'id' => 1,
//     //             'slug' => 'judul-post-pertama',
//     //             'title' => 'Judul Post Pertama',
//     //             'Author' => 'John Doe',
//     //             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, quia. Repellat, quia. Repellat, quia.',
//     //         ],
//     //         [
//     //             'id' => 2,
//     //             'slug' => 'judul-post-kedua',
//     //             'title' => 'Judul Post Kedua',
//     //             'Author' => 'John Doe',
//     //             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, quia. Repellat, quia. Repellat, quia.',
//     //         ],
//     //         [
//     //             'id' => 3,
//     //             'slug' => 'judul-post-ketiga',
//     //             'title' => 'Judul Post Ketiga',
//     //             'Author' => 'John Doe',
//     //             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, quia. Repellat, quia. Repellat, quia.',
//     //         ]
//     //     ];
//     // }

//     // public static function find($slug): array
//     // {
//     //     // Arr::first(static::all(), function ($post) use ($slug) {
//     //     //     return $post['slug'] == $slug;
//     //     // });
//     //     $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
//     //     if (!$post) {
//     //         abort(404);
//     //     } else {
//     //         return $post;
//     //     }
//     // }
// }
