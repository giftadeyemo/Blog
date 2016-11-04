<?php $__env->startSection('title', '| Create New Post'); ?>


<?php $__env->startSection('stylesheets'); ?>

	<?php echo e(Html::style('css/parsley.css')); ?>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
	<div class="col-md-8 col-md-offset-2">
	<h1>Create New Post</h1>
	<hr>

	<?php echo e(Form::open(array('route' => 'posts.store', 'data-parsley-validate' => ''))); ?>

		<?php echo e(Form::label('title', 'Title')); ?>

		<?php echo e(Form::text('title', null,array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))); ?>


		<?php echo e(form::label('slug', 'Slug')); ?>

		<?php echo e(form::text('slug', 'null', array('class' => 'form-control', 'required', 'minlength' => '5', 'maxlength' => '255'))); ?>


		<?php echo e(Form::label('body', "Post Body:" )); ?>

		<?php echo e(Form::textarea('body', null, array('class' => 'form-control', 'required' => ''))); ?>

		<?php echo e(Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px'))); ?>


	<?php echo e(Form::close()); ?>


	</div>
</div>
	


</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

	<?php echo e(Html::script('js/parsley.min.js')); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>