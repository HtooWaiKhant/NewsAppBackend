<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller;use App\Http\Resources\CategoriesResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\PostResource;
use App\Http\Resources\PostsResource;
use Illuminate\Http\Request;

class CategoryApiController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return CategoryResource::collection($categories);
    }

    public function posts($id)
    {
        $category = Category::find($id);
        return PostResource::collection($category->posts);
    }
}
