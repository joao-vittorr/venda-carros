@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Type') }}</div>

                <div class="card-body">


                    @if ($data->id == "")
                        <form id="main" method="POST" action="{{ route('type.store') }}" enctype="multipart/form-data">
                    @else
                        <form id="main" method="POST" action="{{ route('type.update',$data) }}" enctype="multipart/form-data">
                        @method('PUT')
                    @endif

                        @csrf

                        
                        
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">
                                {{ __('Name') }}
                            </label>

                            <div class="col-md-6">
                                <input id="name" type="text" 
                                    class="form-control @error('name') is-invalid @enderror" 
                                    name="name" value="{{ old('name', $data->name) }}"  
                                    autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    
                    </form>

                    @if($data->exists)
                        <ol>
                        @foreach ($posts as $post)
                        <li>
                            <a href='{{route('post.edit',$post)}}'>{{ $post->subject }}</a>
                            <a href="{{route('type.desvincular',$post->type_posts_id)}}">X</a>
                        </li>
                        @endforeach
                        </ol>
                        {{ $posts->links() }}
                    @endif


                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" form="main">
                                    {{ __('Save') }}
                                </button>

                                <a class='btn btn-secondary' href="{{route('type.create')}}">
                                    {{__('New type')}}
                                </a>


                                                                
                                @if ($data->id != "")
                                <form name='delete' action="{{route('type.destroy',$data)}}"
                                    method="POST"
                                    style='display: inline-block;'
                                    >
                                    @csrf
                                    @method("DELETE")
                                    <button type="button" onclick="confirmDeleteModal(this)" class="btn btn-danger">
                                        {{ __('Delete') }}
                                    </button>
                                </form>
                                @endif

                                
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
