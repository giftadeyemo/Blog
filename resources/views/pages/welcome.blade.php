@extends('main')


@section('title', '| Home')

@section('active-button')
         <li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>
         <li><a href="/about">About</a></li>
         <li><a href="/contact">Contact</a></li>
@endsection

@section('content')
        <div class="row"> 
              <div class="col-md-12">
                <div class="jumbotron">
                  <h1> Welcome to my Blog!</h1>
                  <p class="lead">Thank you so much for visiting. This is my test website built with Laravel. Please read my popular post!</p>
                  <p><a class="btn btn-primary btn-lg" href="" role="button">Popular Post</a></p>

                </div>
            </div>
        </div> <!-- end of header row-->
        <hr>
        <div class="row">
            <div class="col-md-8">
                @foreach($posts as $post)
                  <div class="post">
                    <h3>{{$post->title}}</h3> 
                    <p>{{substr($post->body, 0, 10)}}{{ strlen($post->body) > 10 ? "..." : "" }}</p>
                    <a href="#" class="btn btn-primary"> Read More..</a>              
                  </div>
              @endforeach
            
            </div>
           

            <div class="col-md-3 col-md-offset-1">
              <h3>Side Bar</h3>
            </div>
        </div> 

      </div>
@endsection
                
               
        
            