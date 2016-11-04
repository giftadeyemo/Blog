@extends('main')

@section('title', '| Edit Blog Post')

@section('content')
	<div class="row">
		<!--The line below does "Form Model Binding", it reads a row from our posts table using the Post model and then displays the title and the body of the post in the form created below it.-->
		{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}


		<div class="col-md-8">
			{{ Form::label('title', 'Title')}}
			{{ Form::text('title', null, ["class" => 'form-control input-lg'])}}

			{{ Form::label('slug', 'Slug', ["class" =>' body-top-margin'])}}
			{{ Form::text('slug', null, ["class" => 'form-control'])}}


			{{ Form::label('body', 'Body', ["class" =>' body-top-margin'])}}
			{{ Form::textarea('body', null, ["class" => 'form-control'])}}

			
		</div>
		<div class="col-md-4">
			<div class="well">
			<dl class="dl-horizontal">
				<dt>Created At:</dt>
					<dd>{{ date('M j, Y h:i a', strtotime($post->created_at)) }}</dd>
				</dl>
				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
				<dd>{{ date('M j, Y h:i a', strtotime($post->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => "btn btn-danger btn-block")) !!} 
					
					
					</div>
					<div class="col-sm-6">
						{{ Form::submit ('Save Changes', ['class'=> 'btn btn-success btn-block'])}}
											
					</div>
				

				</div>
			</div>
		</div>
		{!!Form::close()!!}
	</div>	
@endsection

