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
                            <label for="subject" class="col-md-4 col-form-label text-md-end">{{ __('Subject') }}</label>
                            <div class="col-md-6">
                                <input id="subject" type="text" class="form-control" 
                                         name="subject" value="{{ old('subject') }}" 
                                         autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="text" class="col-md-4 col-form-label text-md-end">{{ __('Text') }}</label>
                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" 
                                         name="text" value="{{ old('text') }}" 
                                         autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="publish_date" class="col-md-4 col-form-label text-md-end">{{ __('Publish date') }}</label>
                            <div class="col-md-6">
                                <input id="publish_date" type="date" class="form-control" 
                                         name="publish_date" value="{{ old('publish_date') }}" 
                                         autofocus>
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Search') }}
                                </button>

                               {{-- @can('create','App\Models\Advert')  --}}
                                <a class='btn btn-secondary' href="{{route('advert.create')}}">
                                    {{__('New Advertisement')}}
                                </a>
                                {{-- @endcan --}}
                                
                            </div>
                        </div>
                    </form>


                    <table class="table">
                        <thead>
                          <tr>
                            @can('viewAny','App\Models\Advert')  
                                <th scope="col">{{__("Edit")}}</th>
                            @endcan
                            <th scope="col">{{__("Subject")}}</th>
                            <th scope="col">{{__("Slug")}}</th>
                            <th scope="col">{{__("Owner")}}</th>
                            @can('deleteAny','App\Models\Advert')  
                                <th scope="col">{{__("Delete")}}</th>
                            @endcan
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $item)
                                <tr>
                                    @can('view',$item)  
                                    <td>
                                        <a href="{{route("advert.edit",$item)}}" class="btn btn-primary">
                                            {{ __('Edit') }}
                                        </a>
                                    </td>
                                    @endcan
                                    <td>{{$item->subject}}</td>    
                                    <td>{{$item->slug}}</td>    
                                    <td>{{$item->user->name}}</td>  
                                    @can('delete',$item)  
                                    <td>
                                        <form action="{{route('advert.destroy',$item)}}" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <button class="btn btn-danger" type="button" onclick="confirmDeleteModal(this)"  >
                                                {{ __('Delete') }}
                                            </button>
                                        </form>
                                    </td>
                                    @endcan
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
