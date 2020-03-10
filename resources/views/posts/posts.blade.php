@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-4">
            @foreach($posts as $v)
                <div class="col-md-4 mb-2">
                    <div class="card" style="width: 18rem">
                        <div class="card-body">
                            <h5 class="card-title">{{$v->title}}</h5>
                            <a class="btn btn-primary" href="{{route('posts.show', $v->id)}}">Read Me</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="col-md-12">{{$posts->links()}}</div>
    </div>

@endsection
