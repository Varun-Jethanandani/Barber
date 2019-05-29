<body>
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
              <h5 class="card-title text-center">Sign In</h5>
              {{ Form::open(['action'=>'WebUserController@dashboard','method'=>'POST']) }}
              <div class='form-group'>
                    {{Form::label('email','Email')}}
                    {{Form::text('email','',['class'=>'form-control','placeholder' => 'Email'])}}
                </div>   
                <div class='form-group'>
                    {{Form::label('password','Password')}}
                    {{Form::textarea('password','',['class'=>'form-control','placeholder' => 'Password'])}}
                </div>             
                {{Form::submit('Submit',['class'=>'btn btn-primary'])}}       
            {{ Form::close() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>