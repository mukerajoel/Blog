@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h2>Blogs</h2>
        <div>
            @foreach ($blogs as $blog)
                <div>
                    <a href="{{route('blogs.show', $blog->id)}}">
                        <h3>{{$blog->title}}</h3>
                    </a>    
                </div>

                <div>
                    <p>
                        {{$blog->description}}
                    </p>
                </div>
            
            @endforeach
        </div>
    </div>
</div>
@endsection
