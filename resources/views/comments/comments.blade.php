@extends('layouts.app')
@section('content')
    <div class="row mt-4">
        @foreach($comments as $v)
            <div class="col-md-4 mb-2">
                <div class="card" style="width: 18rem">
                    <div class="card-body">
                        <h5 class="card-title">{{$v->author->first_name}} {{$v->author->last_name}}</h5>
                            <p class="card-text">{{$v->content}}</p>
                            <a href="{{$v->post->link()}}" class="btn btn-primary">Go to Post</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="col-md-12">{{$comments->links()}}</div>
@endsection
