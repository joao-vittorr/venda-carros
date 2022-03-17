@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Advertisement') }}</div>

                <div class="card-body">




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
                                    NÃO</label>
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
                                    <option selected value="">{{__("Select one year")}}</option>
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
                                {{ __('Price') }} R$
                            </label>

                            <div class="col-md-6">
                                <input id="price" type="text" 
                                    class="form-control price @error('price') is-invalid @enderror" 
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
  

                        <form id="main" method="POST" action="{{ route('financiamento.calcular', $data) }}" enctype="multipart/form-data">

                        @csrf

                        Valor da entrada: <input name="valorEntrada" type="text"><br>
                        Número de parcela: <input name="quantidadeParcela" type="text"><br>    
                        
                        </form> 



                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                    <button type="submit" id="btn-save" class="btn btn-primary" form="main">
                                        {{ __('Calcular') }}
                                    </button>
                            </div>
                        </div>
                    

                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection