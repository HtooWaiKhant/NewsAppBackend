@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12 mb-2">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="title" class="col-md-2 col-form-label">Title</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" placeholder="Title" name="title" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="content" class="col-md-2 col-form-label">Content</label>
                                <div class="col-md-10">
                                    <textarea rows="10" cols="30" class="form-control" placeholder="Content" name="post_content" required></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="category" class="col-md-2 col-form-label">Category</label>
                                <div class="col-md-10">
                                    <select name="category_id" class="form-control" required>
                                        <option value="">Select Category</option>
                                        @foreach($categories as $v)
                                            <option value="{{$v->id}}">{{$v->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tag" class="col-md-2 col-form-label">Tag</label>
                                <div class="col-md-10">
                                    <select name="tags[]" class="form-control" multiple>
                                        @foreach($tags as $v)
                                            <option value="{{$v->id}}">{{$v->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="images" class="col-md-2 col-form-label">Images</label>
                                <div class="col-md-10">
                                    <input type="file" class="form-control" name="images[]" multiple>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="category_title" class="col-md-2 col-form-label"></label>
                                <div class="col-md-10">
                                    <button type="submit" class="btn btn-primary">Save New Post</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
