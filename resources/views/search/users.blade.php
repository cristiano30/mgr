@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 ">
            <div class="panel panel-default">
                <div class="panel-heading ">Search results</div>
                <div class="panel-body">

                    @if($search_results->count() === 0)
                        <h4 class="text-center">No results</h4>
                    @else
                     
                      <div class="row">
                            @foreach ($search_results as $user)
                                <div class="col-sm-4 text-center  ">
                                      <img src="{{ url('user-avatar/'. $user->id .'/160') }}" alt="" class="rounded-circle  img-user"  >
                                    <a href="{{ url('/users/' . $user->id) }}">
                                        <div  >
                                   
                                            <h5>{{ $user->name }}</h5>
                                        </div>
                                    </a>
                                </div> 
                            @endforeach
                        </div>
                        <div class="pages">
                            {{ $search_results }}
                        </div>

                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
