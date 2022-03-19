@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Advertisement') }}</div>

                <div class="card-body">
                    <form method="GET" action="{{ route('advert.list') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="busca" class="col-md-4 col-form-label text-md-end">{{ __('Search') }}</label>
                            <div class="col-md-6">
                                <input id="busca" type="text" class="form-control" 
                                         name="busca" value="{{ old('busca') }}" 
                                         autofocus>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" 
                                         name="title" value="{{ old('title') }}" 
                                         autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="brand" class="col-md-4 col-form-label text-md-end">{{ __('Brand') }}</label>
                            <div class="col-md-6">
                                <input id="brand" type="text" class="form-control" 
                                         name="brand" value="{{ old('brand') }}" 
                                         autofocus>
                            </div>
                        </div>



                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Search') }}
                                </button>

                               @can('create','App\Models\Advert')
                                <a class='btn btn-secondary' href="{{route('advert.create')}}">
                                    {{__('New Advertisement')}}
                                </a>
                                @endcan
                                
                            </div>
                        </div>
                    </form>

                    <table class="table">
                    <h1 class="container-fluid">{{ __('Advertisement') }}</h1>
                        <tbody>
                            @foreach ($list as $item)
                                <tr>
                                    <td>
                                    <div class="card mb-3" style="max-width: 100%;">
                                        <div class="row g-0">
                                          <div class="col-md-4">
                                            <img src="{{asset($item->photo)}}" class="img-fluid rounded-start" alt="...">
                                          </div>
                                          <div class="col-md-8">
                                            <div class="card-body">
                                              <h5 class="card-title">{{$item->title}}</h5>
                                              <p class="card-text">{{$item->user->name}}</p>
                                              <p class="card-text">{{$item->description}}</p>
                                              <p class="card-text"><small class="text-muted">{{$item->created_at}}</small></p>
                                              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                @can('view',$item) 
                                                <a href="{{route("advert.edit",$item)}}">
                                                    <button class="btn btn-primary me-md-2" type="button"> 
                                                        {{ __('View') }}
                                                    </button>
                                                </a>
                                                @endcan
                                                @can('delete',$item)  
                                                    <form action="{{route('advert.destroy',$item)}}" method="post">
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
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                      </table>


                    
                        
                    
                    {{ $list->links() }}
                


                </div>
            </div>
        </div>
    </div>
</div>
@endsection