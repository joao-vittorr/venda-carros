@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

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
                                <input id="cpf" type="cpf" class="form-control cpf @error('cpf') is-invalid @enderror" name="cpf">

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
                                <input id="phone" type="phone" class="form-control phone @error('phone') is-invalid @enderror" name="phone" >

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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

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
                                        class="form-control @error('cep') is-invalid @enderror cep" 
                                        name="cep" value="{{ old('cep',!empty($item->users) ? $item->users->cep : '') }}" 
                                         autofocus>
                        
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
                                        name="logradouro" value="{{ old('logradouro',!empty($item->address) ? $item->address->logradouro : '') }}" 
                                        autofocus>
                        
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
                                        name="numero" value="{{ old('numero',!empty($item->address) ? $item->address->numero : '') }}" 
                                         autofocus>
                        
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
                                        name="bairro" value="{{ old('bairro',!empty($item->address) ? $item->address->bairro : '') }}" 
                                        autofocus>
                        
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
                                        name="localidade" value="{{ old('localidade',!empty($item->address) ? $item->address->localidade : '') }}" 
                                         autofocus>
                        
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
                                        name="uf" value="{{ old('uf',!empty($item->address) ? $item->address->uf : '') }}" 
                                         autofocus>
                        
                                @error('uf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
