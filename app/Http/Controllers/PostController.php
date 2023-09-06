<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use宣言は外部にあるクラスをPostController内にインポートできる。
//この場合、App\Models内のPostクラスをインポートしている。
use App\Models\Post;
//PostController.php内でPost.phpのPostクラスを使用したいため、
//PostController内でuse宣言を行う

class PostController extends Controller
{
    public function index(Post $post){
        return $post->get();
    }
}
