@extends('layouts.app')

@section('content')
<div class="container h-100">
    <div class="row justify-content-center h-100">
        <div class="col-md-25 h-100">
            <div class="card h-100">
                <main>
                    <div class="col-md-5">
                          <div class="h-100 p-3 bg-light border rounded-3">
                            <h2>Olá, {{Auth::user()->name}}</h2>
                            <p><span>CPF:</span><label for="CPF" class="col-md-4 col-form-label text-md-end cpf">
                                {{ Auth::user()->cpf }}
                            </label></p>
                            <p><span>Telefone:</span><label for="phone" class="col-md-4 col-form-label text-md-end phone">
                                {{ Auth::user()->phone }}
                            </label></p>
                            <p><span>E-mail:</span><label for="email" class="col-md-4 col-form-label text-md-end">
                                {{ Auth::user()->email }}
                            </label></p>
                            <p><span>Endereço</span></p>
                            <p><span>Logradouro:</span><label for="logradouro" class="col-md-4 col-form-label text-md-end">
                                {{ Auth::user()->logradouro }}
                            </label></p>
                            <p><span>Número:</span><label for="numero" class="col-md-4 col-form-label text-md-end">
                                {{ Auth::user()->numero }}
                            </label></p>
                            <p><span>Bairro:</span><label for="bairro" class="col-md-4 col-form-label text-md-end">
                                {{ Auth::user()->bairro }}
                            </label></p>
                            <p><span>Localidade:</span><label for="localidade" class="col-md-4 col-form-label text-md-end">
                                {{ Auth::user()->localidade }} / {{ Auth::user()->uf}}
                            </label></p>
                            <p><span>CEP:</span><label for="cep" class="col-md-4 col-form-label text-md-end cep">
                                {{ Auth::user()->cep }}
                            </label></p>
                        
                            
                          <div class="col-md-8">
                            <a class="btn btn-primary" href="{{route("user.edit", Auth::user())}}" >{{__("View register")}}</a>
                          </div>
                          </div>
                        </div>
                    </div>

                </main>
            </div>
        </div>
    </div>
</div>
@endsection
