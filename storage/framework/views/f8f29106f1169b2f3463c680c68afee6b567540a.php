<?php $__env->startSection('title', '| Edit Blog Post'); ?>

<?php $__env->startSection('content'); ?>
	<div class="row">
		<!--The line below does "Form Model Binding", it reads a row from our posts table using the Post model and then displays the title and the body of the post in the form created below it.-->
		<?php echo Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']); ?>



		<div class="col-md-8">
			<?php echo e(Form::label('title', 'Title')); ?>

			<?php echo e(Form::text('title', null, ["class" => 'form-control input-lg'])); ?>


			<?php echo e(Form::label('slug', 'Slug', ["class" =>' body-top-margin'])); ?>

			<?php echo e(Form::text('slug', null, ["class" => 'form-control'])); ?>



			<?php echo e(Form::label('body', 'Body', ["class" =>' body-top-margin'])); ?>

			<?php echo e(Form::textarea('body', null, ["class" => 'form-control'])); ?>


			
		</div>
		<div class="col-md-4">
			<div class="well">
			<dl class="dl-horizontal">
				<dt>Created At:</dt>
					<dd><?php echo e(date('M j, Y h:i a', strtotime($post->created_at))); ?></dd>
				</dl>
				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
				<dd><?php echo e(date('M j, Y h:i a', strtotime($post->updated_at))); ?></dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						<?php echo Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => "btn btn-danger btn-block")); ?> 
					
					
					</div>
					<div class="col-sm-6">
						<?php echo e(Form::submit ('Save Changes', ['class'=> 'btn btn-success btn-block'])); ?>

											
					</div>
				

				</div>
			</div>
		</div>
		<?php echo Form::close(); ?>

	</div>	
<?php $__env->stopSection(); ?>


<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>