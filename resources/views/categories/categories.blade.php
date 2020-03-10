@extends('layouts.app')
@section('content')

<div class="container">
    <form action="{{route('categories.store')}}" method="post">
        @csrf

        <div class="form-group row">
            <label for="category_title" class="col-md-2 col-form-label">Category Title</label>
            <div class="col-md-10">
                <input type="text" class="form-control" placeholder="Category Title" name="title" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="category_color" class="col-md-2 col-form-label">Category Color</label>
            <div class="col-md-10">
                <input type="color" class="form-control" placeholder="Category Color" name="color" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="category_title" class="col-md-2 col-form-label"></label>
            <div class="col-md-10">
               <button type="submit" class="btn btn-primary">Save New Category</button>
            </div>
        </div>

    </form>

    <div class="row">
        @foreach($categories as $v)
            <div class="col-md-3 mt-2 mb-2">
                <div class="card">
                    <div class="card-body">
                        {{$v->title}}
                        <div style="background-color: {{$v->color}}; width: 50px; height: 25px;"></div>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
</div>
@endsection
