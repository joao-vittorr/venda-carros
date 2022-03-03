@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Search') }}</div>

                <div class="card-body">


                    @if (!$data->exists)
                        <form id="main" method="POST" action="{{ route('advert.store') }}" enctype="multipart/form-data">
                    @else
                        <form id="main" method="POST" action="{{ route('advert.update',$data) }}" enctype="multipart/form-data">
                        @method('PUT')
                    @endif

                        @csrf

                        @if ($data->exists)            
                        <div class="row mb-3">
                            <label for="subject" class="col-md-4 col-form-label text-md-end">
                                {{ __('Owner') }}</label>
                            
                                <div class="col-md-6">
                                    <input  class="form-control"
                                    name="subject" value="{{ $data->user->name }}"
                                    disabled>
                                </div>
                        </div>
                        @endif

                        
                        
                        <div class="row mb-3">
                            <label for="subject" class="col-md-4 col-form-label text-md-end">
                                {{ __('Title') }}
                            </label>

                            <div class="col-md-6">
                                <input id="title" type="text" 
                                    class="form-control @error('title') is-invalid @enderror" 
                                    name="subject" value="{{ old('title', $data->subject) }}"  
                                    autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">
                                {{ __('Type') }}
                            </label>
    
                            <div class="col-md-6">
                            <select class="form-select @error('category_id') is-invalid @enderror"
                                    id="category_id"
                                    name="category_id" >
                                    <option value=''>{{__("Select one option")}}</option>
                                @foreach($categoriesList as $cat)
                                
                                    <option value='{{$cat->id}}'
                                        @if (old('category_id',$data->category_id) == $cat->id)
                                            selected
                                        @endif
                                        >{{$cat->name}}</option>
                                @endforeach
                            </select>

                            @if($data->exists)
                                @foreach ($categories as $cat)
                                <div class="btn-group" role="group">
                                    <a href='{{route('category.edit',$cat)}}'><button type="button" class="btn btn-secondary" disabled>{{ $cat->name }}</button></a>
                                    <a href="{{route('category.desvincular',$cat->category_posts_id)}}"><button type="button" class="btn btn-danger">X</button></a>
                                </div>
                                @endforeach
                            @endif

                            @error('category_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">
                                {{ __('Brand') }}
                            </label>
    
                            <div class="col-md-6">
                            <select class="form-select @error('brand_id') is-invalid @enderror"
                                    id="brand_id"
                                    name="brand_id" >
                                    <option value=''>{{__("Select one option")}}</option>
                                @foreach($categoriesList as $cat)
                                
                                    <option value='{{$cat->id}}'
                                        @if (old('brand_id',$data->brand_id) == $cat->id)
                                            selected
                                        @endif
                                        >{{$cat->name}}</option>
                                @endforeach
                            </select>

                            {{--@if($data->exists)
                                @foreach ($categories as $cat)
                                <div class="btn-group" role="group">
                                    <a href='{{route('brand.edit',$cat)}}'><button type="button" class="btn btn-secondary" disabled>{{ $cat->name }}</button></a>
                                    <a href="{{route('brand.desvincular',$cat->brand_posts_id)}}"><button type="button" class="btn btn-danger">X</button></a>
                                </div>
                                @endforeach
                            @endif
                            
                            @error('brand_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            --}}

                        </div>

                        <div class="row mb-3">
                            <label for="subject" class="col-md-4 col-form-label text-md-end">
                                {{ __('Model') }}
                            </label>

                            <div class="col-md-6">
                                <input id="model" type="text" 
                                    class="form-control @error('model') is-invalid @enderror" 
                                    name="subject" value="{{ old('model', $data->subject) }}"  
                                    autofocus>

                                @error('model')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="color" class="col-md-4 col-form-label text-md-end">
                                {{ __('Color') }}
                            </label>

                            <div class="col-md-6">
                                <input id="color" type="text" 
                                    class="form-control @error('color') is-invalid @enderror" 
                                    name="color" value="{{ old('color', $data->color) }}"  
                                    autofocus>

                                @error('color')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="row mb-3">
                            <label for="color" class="col-md-4 col-form-label text-md-end">
                                {{ __('Multimidia') }}
                            </label>

                        <ul class="list-group list-group-horizontal" style="justify-content: center">
                            <li class="list-group-item">    
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">SOM</label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">CENTRAL</label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">TELA PARA PASSAGEIROS</label>
                                </div>
                            </li>
                        </ul>
                       
                            @error('color')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                             @enderror

                        </div>

                        <div class="row mb-3">
                            <label for="publish_date" class="col-md-4 col-form-label text-md-end">
                                {{ __('Publish date') }}
                            </label>

                            <div class="col-md-6">
                                <input id="publish_date" type="date" 
                                    class="form-control @error('publish_date') is-invalid @enderror" 
                                    name="publish_date" value="{{ old('publish_date',$data->publish_date == "" ? "" : $data->publish_date->format('Y-m-d')) }}"  >

                                @error('publish_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="image" class="col-md-4 col-form-label text-md-end">
                                {{ __('Image') }}
                            </label>

                            <div class="col-md-6">
                                <input id="image" type="file" 
                                    class="form-control @error('image') is-invalid @enderror" 
                                    name="image" value="{{ old('image', $data->image) }}"  >


                                @if ($data->id)
                                    <img src="{{asset($data->image)}}" class="rounded" width='200'/>
                                @endif
                                

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="slug" class="col-md-4 col-form-label text-md-end">
                                {{ __('Slug') }}
                            </label>

                            <div class="col-md-6">
                                <input id="slug" type="text" 
                                    class="form-control" 
                                    value="{{ old('slug', $data->slug) }}" 
                                    disabled>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="text" class="col-md-4 col-form-label text-md-end">
                                {{ __('Text') }}
                            </label>

                            <div class="col-md-6">
                                <textarea id="text" type="text" 
                                    class="form-control @error('text') is-invalid @enderror" 
                                    name="text" >{{ old('text', $data->text) }}</textarea>

                                @error('text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </form>


                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                @can('update',$data)
                                    <button type="submit" id="btn-save" class="btn btn-primary" form="main">
                                        {{ __('Save') }}
                                    </button>
                                @endcan

                                @can('create','App\\Models\Post')
                                <a class='btn btn-secondary' href="{{route('post.create')}}">
                                    {{__('New post')}}
                                </a>
                                @endcan


                                                                
                                @can ('delete',$data)
                                <form name='delete' action="{{route('post.destroy',$data)}}"
                                    method="post"
                                    style='display: inline-block;'>
                                    @csrf
                                    @method("DELETE")
                                    <button type="button" onclick="confirmDeleteModal(this)" class="btn btn-danger">
                                        {{ __('Delete') }}
                                    </button>
                                </form>
                                @endcan

                                
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
