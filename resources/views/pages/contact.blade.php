@extends('main')

@section('title', '| Contact')
@section('active-button')
         <li><a href="/">Home <span class="sr-only">(current)</span></a></li>
         <li><a href="/about">About</a></li>
         <li class="active"><a href="/contact">Contact</a></li>
@endsection
@section('content')
        <div class="row"> 
              <div class="col-md-12">
               <h1>Contact Me</h1>
               <hr>
               <form>
                   <div class="form-group">
                        <label name="email">Email:</label>
                        <input id="email" class="form-control" name="email">
                    </div>

                    <div class="form-group">
                        <label name="subject">Subject:</label>
                        <input id="subject" class="form-control" name="subject">
                    </div>

                    <div class="form-group">
                        <label name="email">Message:</label>
                        <textarea id="message" name="message" class="form-control">Type your message here...</textarea>
                    </div>

                    <input type="submit" value="Send Message" class="btn btn-success">
               </form>

                

            </div>
        </div> 
@endsection