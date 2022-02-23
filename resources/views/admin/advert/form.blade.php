@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Advertisement') }}</div>

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
                                    name="title" value="{{ old('title', $data->title) }}"  
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

                            @if($data->exists)
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
                            

                        </div>

                        <div class="row mb-3">
                            <label for="model" class="col-md-4 col-form-label text-md-end">
                                {{ __('Model') }}
                            </label>

                            <div class="col-md-6">
                                <input id="model" type="text" 
                                    class="form-control @error('model') is-invalid @enderror" 
                                    name="model" value="{{ old('model', $data->model) }}"  
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
                            <label for="mult" class="col-md-4 col-form-label text-md-end">
                                {{ __('Multimedia') }}
                            </label>
                        <div class="col-md-6">
                        <ul class="list-group list-group-horizontal" style="justify-content: center">
                            <li class="list-group">    
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                    SOM</label>
                                </div>
                            </li>
                            <li class="list-group">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label" for="flexSwitchCheckDefault2">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault2">
                                    CENTRAL</label>
                                </div>
                            </li>
                            <li class="list-group">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label" for="flexSwitchCheckDefault3">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault3">
                                    TELA PARA PASSAGEIROS</label>
                                </div>
                            </li>
                        </ul>
                       
                                @error('mult')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="manuf_year" class="col-md-4 col-form-label text-md-end">
                                {{ __('Year of Manufacture') }}
                            </label>

                            <div class="col-md-6">
                                <select class="form-select @error('manuf_year') is-invalid @enderror"
                                id="manuf_year"
                                name="manuf_year">
                                    <option selected>Open this select menu</option>
                                    @for ($i = 1950; $i <= date("Y"); $i++)
                                         <option value={{$i}}>{{$i}}</option>
                                    @endfor
                                </select>

                                @error('manuf_year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="mileage" class="col-md-4 col-form-label text-md-end">
                                {{ __('Mileage') }}
                            </label>

                            <div class="col-md-6">
                                <input id="mileage" type="text" 
                                    class="form-control @error('mileage') is-invalid @enderror" 
                                    name="mileage" value="{{ old('mileage', $data->mileage) }}"  
                                    autofocus>

                                @error('mileage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-end">
                                {{ __('Price') }}
                            </label>

                            <div class="col-md-6">
                                <input id="price" type="text" 
                                    class="form-control @error('price') is-invalid @enderror" 
                                    name="price" value="{{ old('price', $data->price) }}"  
                                    autofocus>

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="photo" class="col-md-4 col-form-label text-md-end">
                                {{ __('Photo') }}
                            </label>

                            <div class="col-md-6">
                                <input id="photo" type="file" 
                                    class="form-control @error('photo') is-invalid @enderror" 
                                    name="photo" value="{{ old('photo', $data->photo) }}"  >


                                @if ($data->id)
                                    <img src="{{asset($data->photo)}}" class="rounded" width='200'/>
                                @endif
                                

                                @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="text" class="col-md-4 col-form-label text-md-end">
                                {{ __('Description') }}
                            </label>

                            <div class="col-md-6">
                                <textarea id="description" type="text" 
                                    class="form-control @error('description') is-invalid @enderror" 
                                    name="description" >{{ old('description', $data->description) }}</textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </form>


                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {{--@can('update',$data)--}}
                                    <button type="submit" id="btn-save" class="btn btn-primary" form="main">
                                        {{ __('Publish') }}
                                    </button>
                                {{--@endcan--}}

                                {{--@can('create','App\\Models\Advert')--}}
                                <a class='btn btn-secondary' href="{{route('advert.create')}}">
                                    {{__('New Advertisement')}}
                                </a>
                                {{--@endcan--}}


                                                                
                                @can ('delete',$data)
                                <form name='delete' action="{{route('advert.destroy',$data)}}"
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
