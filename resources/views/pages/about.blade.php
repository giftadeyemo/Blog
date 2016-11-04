@extends ('main')
@section('title', '| About')
@section('active-button')
         <li><a href="/">Home <span class="sr-only">(current)</span></a></li>
         <li class="active"><a href="/about">About</a></li>
         <li><a href="/contact">Contact</a></li>
@endsection


@section('content')
        <div class="row"> 
              <div class="col-md-12">
               <h1>About Me</h1>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin diam justo, scelerisque non felis porta, placerat vestibulum nisi. Vestibulum ac elementum massa.</p>
                <p>You  may reach me at {{$data['email']}}</p>

            </div>
        </div> 
@endsection