<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    
    public function show($post)
    {
        $posts =[
            'first'  => 'Hello World',
            'second' => 'some other content'
        ];

        if (! array_key_exists($post, $posts)){
            //abort(response( 'Sorry Post not found',404));
            abort(404,'Post not found');
        }

        return $posts[$post];

    }
}
