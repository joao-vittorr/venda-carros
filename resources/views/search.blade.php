@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Search') }}</div>

                <div class="card-body">

                   
                

                    <form id="main" method="POST" action="{{ route('advert.list') }}" enctype="multipart/form-data">
                   
                        @csrf
                       
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
                            <label for="type_id" class="col-md-4 col-form-label text-md-end">
                                {{ __('Type') }}
                            </label>
    
                            <div class="col-md-6">
                            <select class="form-select @error('type_id') is-invalid @enderror"
                                    id="type_id"
                                    name="type_id" >
                                    <option value=''>{{__("Select one option")}}</option>
                            
                                @foreach($typesList as $typ)        
                                    <option value='{{$typ->id}}'
                                        @if (old('type_id', $data->type?->id) == $typ->id)
                                            selected
                                        @endif
                                        >{{$typ->name}}</option>
                                @endforeach
                            </select>

                            @error('type_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                        </div>

                        <div class="row mb-3">
                            <label for="category_id" class="col-md-4 col-form-label text-md-end">
                                {{ __('Brand') }}
                            </label>
    
                            <div class="col-md-6">
                            <select class="form-select @error('category_id') is-invalid @enderror"
                                    id="category_id"
                                    name="category_id" >
                                    <option value=''>{{__("Select one option")}}</option>
                                @foreach($categoriesList as $cat)
                                
                                    <option value='{{$cat->id}}'
                                        @if (old('brand_id',$data->category?->id) == $cat->id)
                                            selected
                                        @endif
                                        >{{$cat->name}}</option>
                                @endforeach
                            </select>
                            
                            
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
                                        <input class="form-check-input" name="mult" value="1" type="radio" id="flexSwitchCheckDefault" 
                                        @if (old('mult',$data->mult) == '1')
                                            checked
                                        @endif>
                                    SIM</label>
                                </div>
                            </li>
                            <li class="list-group">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label" for="flexSwitchCheckDefault2">
                                        <input class="form-check-input" name="mult" value="0" type="radio" id="flexSwitchCheckDefault"
                                        @if (old('mult',$data->mult) == '0')
                                            checked
                                        @endif>
                                    N??O</label>
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
                                    <option selected value="">Open this select menu</option>
                                    @for ($i = 1950; $i <= date("Y"); $i++)
                                         <option value={{$i}}  
                                       @if (old('manuf_year',$data->manuf_year) == $i)
                                            selected
                                        @endif>{{$i}}</option> 
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
