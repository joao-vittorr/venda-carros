@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Advertisement') }}</div>

                <div class="card-body">

                    <div class="card mb-3" style="max-width: 100%;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="{{asset($data->photo)}}" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">{{$data->model}}</h5>
                              <h5 class="card-title">{{ __('Price')}}: R$ <span style="color: red" class="price">{{$data->price}}</span></h5>
                              <p class="card-text">{{ __('Type')}}: {{$data->type->name}} </p>
                              <p class="card-text">{{$data->description}}</p>
                              <p class="card-text"><small class="text-muted">{{ __('Ad Date')}}: {{$data->created_at->format('d/m/Y')}}</small></p>
                              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>


                    <form id="main" method="POST" action="{{ route('financiamento.calcular', $data) }}" enctype="multipart/form-data">

                        @csrf
                        
                        <div class="input-group mb-3">
                            <label>Valor da entrada: <input name="valorEntrada" type="text" class="form-control price" aria-describedby="basic-addon1"></label>
                        </div>
                        
                        <div class="input-group mb-3">
                               <label>Número de parcela: <input name="quantidadeParcela" type="text" placeholder="Max: 60" class="form-control" aria-describedby="basic-addon2"></label>
                        </div>
                        

                        <div class="input-group-append">
                            <button type="submit" id="btn-save" class="btn btn-primary" form="main">
                                {{ __('Calcular') }}
                            </button>
                        </div>
                    </form> 

            

                    @if (isset($res))
                    <div class="input-group mb-3">
                        <label >Valor da parcela: <span class="price"> R$ {{ $res }}</span> </label>
                    </div>
                    @endif
                   
    
                      

                </div>
            </div>
        </div>
    </div>
</div>
@endsection