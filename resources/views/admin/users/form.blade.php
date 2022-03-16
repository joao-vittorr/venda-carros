@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Panel Users') }}</div>

                <div class="card-body">


                    @if ($data->id == "")
                        <form id="main" method="POST" action="{{-- route('user.store') --}}" enctype="multipart/form-data">
                    @else
                        <form id="main" method="POST" action="{{-- route('user.update',$data) --}}" enctype="multipart/form-data">
                        @method('PUT')
                    @endif

                        @csrf

                        
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  disabled value="{{ old('name', $data->name) }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="cpf" class="col-md-4 col-form-label text-md-end">{{ __('CPF') }}</label>

                            <div class="col-md-6">
                                <input id="cpf" type="cpf" class="form-control cpf @error('cpf') is-invalid @enderror" name="cpf" disabled value="{{ old('cpf', $data->cpf) }}">

                                @error('cpf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control phone @error('phone') is-invalid @enderror" name="phone" disabled value="{{ old('phone', $data->phone) }}" >

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $data->email) }}"  disabled autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="cep" class="col-md-4 col-form-label text-md-end">
                                {{ __('CEP') }}</label>
                        
                            <div class="col-md-6">
                                <input id="cep" type="text" 
                                        class="form-control cep @error('cep') is-invalid @enderror" 
                                        name="cep" value="{{ old('cep', $data->cep) }}" 
                                        disabled autofocus>
                        
                                @error('cep')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="logradouro" class="col-md-4 col-form-label text-md-end">
                                {{ __('Logradouro') }}</label>
                        
                            <div class="col-md-6">
                                <input id="logradouro" type="text" 
                                        class="form-control @error('logradouro') is-invalid @enderror" 
                                        name="logradouro" value="{{ old('logradouro', $data->logradouro) }}" 
                                        disabled autofocus>
                        
                                @error('logradouro')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        
                        <div class="row mb-3">
                            <label for="numero" class="col-md-4 col-form-label text-md-end">
                                {{ __('Numero') }}</label>
                        
                            <div class="col-md-6">
                                <input id="numero" type="text" 
                                        class="form-control @error('numero') is-invalid @enderror" 
                                        name="numero" value="{{ old('numero',$data->numero) }}" 
                                        disabled autofocus>
                        
                                @error('numero')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        
                        <div class="row mb-3">
                            <label for="bairro" class="col-md-4 col-form-label text-md-end">
                                {{ __('Bairro') }}</label>
                        
                            <div class="col-md-6">
                                <input id="bairro" type="text" 
                                        class="form-control @error('bairro') is-invalid @enderror" 
                                        name="bairro" value="{{ old('bairro',$data->bairro) }}" 
                                        disabled autofocus>
                        
                                @error('bairro')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        
                        
                        
                        <div class="row mb-3">
                            <label for="localidade" class="col-md-4 col-form-label text-md-end">
                                {{ __('Localidade') }}</label>
                        
                            <div class="col-md-6">
                                <input id="localidade" type="text" 
                                        class="form-control @error('localidade') is-invalid @enderror" 
                                        name="localidade" value="{{ old('localidade',$data->localidade) }}" 
                                        disabled autofocus>
                        
                                @error('localidade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        
                        
                        <div class="row mb-3">
                            <label for="uf" class="col-md-4 col-form-label text-md-end">
                                {{ __('UF') }}</label>
                        
                            <div class="col-md-6">
                                <input id="uf" type="text" 
                                        class="form-control @error('uf') is-invalid @enderror" 
                                        name="uf" value="{{ old('uf', $data->uf) }}" 
                                        disabled autofocus>
                        
                                @error('uf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-15 text-center">
                            <a class="btn btn-primary" href="{{route("dashboard")}}" >{{__("Home screen")}}</a>
                        </div>
                            

                    </form>


                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {{--<button type="submit" class="btn btn-primary" form="main">
                                    {{ __('Save') }}
                                </button>

                                <a class='btn btn-secondary' href="{{route('user.create')}}">
                                    {{__('New user')}}
                                </a>


                                                                
                                @if ($data->id != "")
                                <form name='delete' action="{{route('user.destroy',$data)}}"
                                    method="user"
                                    style='display: inline-block;'
                                    >
                                    @csrf
                                    @method("DELETE")
                                    <button type="button" onclick="confirmDeleteModal(this)" class="btn btn-danger">
                                        {{ __('Delete') }}
                                    </button>
                                </form>
                                @endif
--}}
                                
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
