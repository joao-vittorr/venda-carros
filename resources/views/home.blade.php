@extends('layouts.app')

@section('content')
<div class="container h-100">
    <div class="row justify-content-center h-100">
        <div class="col-md-25 h-100">
            <div class="card h-100">
                    <div class="container">
                    <div class="row">
                    <div class="col-md-6">
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
                    
                        <div class="col-md-6">
                            <table class="table">
                                <h1 class="container-fluid text-center">{{ __('My Advertisements') }}</h1>
                                    <tbody>
                            

                                        @foreach ($list as $item)
                                            @can('update',$item) 
                                            <tr>
                                                <td>
                                                 <div class="card mb-3" style="max-width: 100%; max-height: 50%;">
                                                    <div class="row g-0">
                                                      <div class="col-md-4">
                                                        <img src="{{asset($item->photo)}}" class="img-fluid rounded-start" alt="...">
                                                      </div>
                                                      <div class="col-md-8">
                                                        <div class="card-body">
                                                          <h5 class="card-title">{{$item->title}}</h5>
                                                          <h5 class="card-title">{{ __('Price')}}: R$ <span style="color: red" class="price">{{$item->price}}</span></h5>
                                                          <p class="card-text">Vendedor: {{$item->user->name}}</p>
                                                          <p class="card-text">{{$item->description}}</p>
                                                          <p class="card-text"><small class="text-muted">{{$item->created_at->format('d/m/Y')}}</small></p>
                                                          <p class="card-text">ID {{$item->id}}</p>
                                                          
                                                          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                         
                                                            <a href="{{route("financiamento", $item)}}">
                                                                <button class="btn btn-primary me-md-2" type="button"> 
                                                                    {{ __('View') }}
                                                                </button>
                                                            </a>
            
                                                            @can('delete',$item)  
                                                                <form action="{{route('advert.destroy',$item)}}" method="post">
                                                                    @csrf
                                                                        @method("DELETE")
                                                                            <button class="btn btn-danger" type="button" onclick="confirmDeleteModal(this)" >
                                                                                {{ __('Delete') }}
                                                                            </button>
                                                                </form>   
                                                                <a href="{{route("anuncio",$item)}}">
                                                                    <button class="btn btn-primary me-md-2" type="button"> 
                                                                        {{ __('Edit') }}
                                                                    </button>
                                                                </a>
                                                            @endcan
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
            
                                            </tr>
                                            
                                            @endcan 
                                        @endforeach

                                       
                                       

                                    </tbody>


                                  </table>

                                 
                                     {{ $list->links() }}   
                              
                                  
                
                            </div>
                            
                          
                          
                    </div>
                </div>
            </div>
        </div>
    

                
            </div>
        </div>
    </div>
</div>
@endsection
