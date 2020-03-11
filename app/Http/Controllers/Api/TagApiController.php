<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Http\Resources\TagResource;
use App\Tag;
use Illuminate\Http\Request;

class TagApiController extends Controller
{
    public function index() {
        $tags = Tag::all();
        return TagResource::collection($tags);
    }

    public function posts($id) {
        $tag = Tag::find($id);
        return PostResource::collection($tag->posts);
    }
}
