@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Advertisement') }}</div>

                <div class="card-body">



                    <div class="card mb-3" style="max-width: 100%;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="{{asset($data->photo)}}" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">{{$data->title}}</h5>
                              <h5 class="card-title">{{ __('Price')}}: R$ <span style="color: red">{{$data->price}}</span></h5>
                              <p class="card-text">Vendedor: {{$data->user->name}}</p>
                              <p class="card-text">{{$data->description}}</p>
                              <p class="card-text"><small class="text-muted">{{$data->created_at}}</small></p>
                              <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                                <a href="{{route("financiamento",$data)}}">
                                    <button class="btn btn-primary me-md-2" type="button"> 
                                        {{ __('View') }}
                                    </button>
                                </a>

                                @can('delete',$data)  
                                    <form action="{{route('advert.destroy',$data)}}" method="post">
                                        @csrf
                                            @method("DELETE")
                                                <button class="btn btn-danger" type="button" onclick="confirmDeleteModal(this)" >
                                                    {{ __('Delete') }}
                                                </button>
                                    </form>
                                @endcan
                              </div>
                            </div>
                          </div>
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