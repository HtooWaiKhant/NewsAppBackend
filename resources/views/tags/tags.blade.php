@extends('layouts.app')
@section('content')

    <div class="container">
        <form action="{{route('tags.store')}}" method="post">
            @csrf

            <div class="form-group row">
                <label for="title" class="col-md-2 col-form-label">Title</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" placeholder="Title" name="title" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="category_title" class="col-md-2 col-form-label"></label>
                <div class="col-md-10">
                    <button type="submit" class="btn btn-primary">Save New Tag</button>
                </div>
            </div>

        </form>

        <div class="row">
            @foreach($tags as $v)
                <div class="col-md-2 mt-2 mb-2">
                    <div class="card">
                        <div class="card-body">
                            {{$v->title}}
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
@endsection
