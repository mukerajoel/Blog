@extends('layouts.app')
@section('content')

    <div>


        

        <div>
            <h3>{{$blog->title}}</h3>    
        </div>

        <div>
            <p>
                {{$blog->description}}
            </p>
        </div>

        <a href="{{route('blogs.update', $blog->id)}}">
            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Update') }}
                    </button>
    
                    
                </div>
            </div>
        </a>
        <a href="{{route('blogs.delete', $blog->id)}}">
            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Delete') }}
                    </button>
    
                    
                </div>
            </div>
        </a>
            
        
    </div>

@endsection