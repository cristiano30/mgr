@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row justify-content-center">




        <div class="col-md-4 ">

               <div class="card ">
                <div class="card-header">Dane użytkownika {{$user->id}}</div>
                <div class="panel-body ">
                  <img src="{{ asset('storage/users/' . $user->id . '/avatars/' . $user->avatar)}}" alt="" class="img-fluid">
 <form action="{{ url('users/' . $user->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field()}}
                    {{method_field('PATCH')}}

      <div class="row" >
            <div class="col-sm-10 col-sm-offset-1">
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="">Avatar</label>
                        <input type="file" class="form-control" name="avatar"  >
                           @if ($errors->has('name'))
                                   <span class="help-block">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                                @endif

                </div>
            </div>
        </div>
                      <div class="row justify-content-center">
                            <div class="col-sm-8   ">
                              <div class="form-group ">
                              <label for="">Imię i nazwisko</label>
                              <input type="text " name="name" class="form-control" value="{{ $user->name}}">
                            </div>
                          </div>
                      </div>

                   <div class="row justify-content-center ">
                          <div class="col-sm-8  ">
                            <div class="form-group ">
                            <label for="">email</label>
                            <input type="email " name="email"  class="form-control" value="{{ $user->email}}">
                          </div>
                        </div>
                    </div>
                    <div class="row  justify-content-center  ">
                          <div class="form-group  ">
                           
                                     <label for="sex" class="col-md-8 col-form-label plec ">{{ __('Płeć') }}</label>
                                 <div class="col-md-12 " >

                                 <div class="form-check form-check-inline justify-content-center" >
                                     <input name="sex" type="radio" value="f"  checked="{{ $user->sex}}">
                                     <label class="form-check-label" for="inlineRadio1">Kobieta</label>
                                 </div>
                                 <div class="form-check form-check-inline">
                                      <input name="sex" type="radio" value="m" checked="{{ $user->sex}}"><br>
                                      <label class="form-check-label" for="inlineRadio2">Mężczyzna</label>
                                </div> 
                                </div>
                          
                              </div>
                     </div>
                   <div class="row text-center" >
                          <div class="col-sm-12  ">
                           <button type="submit" class="btn btn-outline-success  ">Zapisz</button>
                        </div>
                    </div>
                  </form>
                </div>
 
            </div> 

        </div>
  
    </div>
</div>
@endsection
