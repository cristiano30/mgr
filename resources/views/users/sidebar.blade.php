<div class="card-header text-left">Dane użytkownika
                     @if ($user->id === Auth::id()) 
                       <a href="{{ url('/users/' . $user->id . '/edit')}}" class="float-right" > Edycja</a>
        
        @endif
                        
                    </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
        </div>
    </div>
        <div class="col-md-4">
            <div >
  

                <img src="{{ url('user-avatar/' . $user->id . '/250')}}" class="min-avatar rounded-circle" alt="">
            </div>
               <div class="card ">
                  


                  <div id="accordion  ">
<div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      <h2> <a href="{{ url('/users/' . $user->id)}}">{{ $user->name}}</a></h2>
        </button>
      </h5>
    </div>

   
  </div>



                  
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Płeć
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse  " aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        
      <p>
                   @if ($user -> sex == 'f')
                     Kobieta
                   @else
                    Mężczyna
                   @endif
                   </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        E-mail
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
         <p>{{ $user->email}}</p>
      </div>
    </div>
  </div>
  
</div>
                  

                  
        </div>  
            </div>  

   
 