@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-4">
            @foreach($users as $v)
                <div class="col-md-4 mb-2">
                    <div class="card" style="width: 18rem">
                        <div class="card-body">
                            <h5 class="card-title">{{$v->first_name}} {{$v->last_name}}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="col-md-12">{{$users->links()}}</div>
    </div>

@endsection
