<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
//        $str = 'string';
////        dd($str);
//        dump($str);
//        echo 'aaaaaaaa';

//        $post = Post::all();
//        $post = $post->find(1);
//        dump($post);
//
//        $post = Post::where('is_publish', 1)->first();
//        dump($post->title);
        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    public function create() {
        return view('post.create');
//        $postsArr = [
//            [
//                'title' => 'title of post from phpstorm',
//                'content' => 'some interesting content',
//                'image' => 'imageblabla.jpg',
//                'likes' => 20,
//                'is_publish' => 1,
//            ],
//            [
//                'title' => 'another title of post from phpstorm',
//                'content' => 'another some interesting content',
//                'image' => 'another imageblabla.jpg',
//                'likes' => 50,
//                'is_publish' => 1,
//            ],
//        ];
//
////        Post::create([
////            'title' => 'another title of post from phpstorm',
////            'content' => 'another some interesting content',
////            'image' => 'another imageblabla.jpg',
////            'likes' => 50,
////            'is_publish' => 1,
////        ]);
//
//        foreach ($postsArr as $item) {
//            Post::create([
//                'title' => $item['title'],
//                'content' => $item['content'],
//                'image' => $item['image'],
//                'likes' => $item['likes'],
//                'is_publish' => $item['is_publish'],
//            ]);
//        }
//
//        dd('created');
    }

    public function store(Request $request) {
        $data = $request->validate([
           'title' => "string",
           'content' => "string",
           'image' => "string",
        ]);
        dd($data);
    }

    public function update() {
        $post = Post::find(6);

        $post->update([
            'title' => 'updated',
            'content' => 'updated',
            'image' => 'updated',
            'likes' => 1000,
            'is_publish' => 0,
        ]);
        dd('updated');
    }

    public function delete() {

//        $post = Post::find(2);
//        $post->delete();
//        dd('deleted');
        $post = Post::withTrashed()->find(2);
        $post->restore();
        dd('deleted');
    }

    public function firstOrCreate() {
        $anotherPost = [
            'title' => 'some post',
            'content' => 'some content',
            'image' => 'some imageblabla.jpg',
            'likes' => 50000,
            'is_publish' => 1,
        ];

        $post = Post::firstOrCreate([
            'title' => 'some title phpshtorm'
        ], [
            'title' => 'some title phpshtorm',
            'content' => 'some content',
            'image' => 'some imageblabla.jpg',
            'likes' => 50000,
            'is_publish' => 1,
        ]);
        dump($post->content);
        dd('finished');
    }

    public function updateOrCreate() {
        $anotherPost = [
            'title' => 'updateorcreate some post',
            'content' => 'updateorcreate some content',
            'image' => 'updateorcreate some imageblabla.jpg',
            'likes' => 500,
            'is_publish' => 0,
        ];

        $post = Post::updateOrCreate([
            'title' => 'some title n post'
        ], [
            'title' => 'some title n post',
            'content' => 'updateorcreate some content',
            'image' => 'updateorcreate some imageblabla.jpg',
            'likes' => 500,
            'is_publish' => 0,
        ]);
        dump($post->content);
        dd('finished');
    }
}
