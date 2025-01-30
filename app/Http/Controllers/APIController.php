<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function get_post(Request $request){

        $post = Post::where('status', 'publish')->orderBy('date', 'desc');

        if($request->has('slug')){
            $post->where('slug', $request['slug']);
            return response()->json([
                'status' => 200,
                'message' => 'success',
                'data' => $post->get(),
            ]);
        }

        if($request->has('post_category_id')){
            $post->where('post_category_id', $request['post_category_id']);
        }
        
        if($request->has('limit')){
            $post->limit($request['limit']);
            return response()->json([
                'status' => 200,
                'message' => 'success',
                'data' => $post->get(),
            ]);
        }

        if($request->has('paginate')){
            return response()->json([
                'status' => 200,
                'message' => 'success',
                'data' => $post->paginate($request['paginate']),
            ]);
        }

        return response()->json([
            'status' => 200,
            'message' => 'success',
            'data' => $post->get(),
        ]);
    }

    public function get_slug(){
        $post = Post::where('status', 'publish')->orderBy('date', 'desc')->get();

        $slug = [];

        foreach($post as $p){
            array_push($slug, $p->slug);
        }

        return response()->json([
            'status' => 200,
            'message' => 'success',
            'data' => $slug,
        ]);
    }
}
