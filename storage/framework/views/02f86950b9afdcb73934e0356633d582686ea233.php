<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/global/vendor/filament-tablesaw/tablesaw.css">
<div class="page-header">
  <h1 class="page-title font_lato"><?php echo e(trans('app.attendance')); ?> </h1>
  <div class="page-header-actions">
	<ol class="breadcrumb">
		<li><a href="<?php echo e(URL::to('/dashboard')); ?>"><?php echo e(trans('app.home')); ?></a></li>
		<li class="active"><?php echo e(trans('app.attendance')); ?></li>
	</ol>
  </div>
</div>

<div class="page-content" >	
<div class="panel">
<div class="panel-body container-fluid">

<div class="row">
<div class="col-lg-12">

 <div class="bs-example" data-example-id="single-button-dropdown" style="float:right; ">		
<div class="btn-group">
	<form class="form-inline ng-pristine ng-valid" action="<?php echo e(URL::to('attendance/userlist')); ?>" method="get"> 
		<div class="form-group">  
			<input type="text" name="search" class="form-control" id="search" placeholder="<?php echo e(trans('app.search')); ?>" value="<?php echo e(Request::get('search')); ?>" > 
		
		<button type="submit" class="btn btn-outline btn-default"><i class="icon fa-search" aria-hidden="true"></i></button>
		 
		<?php if(Request::get('search') != ''): ?>
	   <a href="<?php echo e(URL::to('attendance/userlist')); ?>" class="btn btn-outline btn-danger" type="button">
		  <i class="icon fa-remove" aria-hidden="true"></i>
		</a>
	<?php endif; ?>
	</div>
	</form>
</div>
</div>
<div style="clear:both;"></div><br/>
<table class="tablesaw table-striped table-bordered tablesaw-columntoggle" data-tablesaw-mode="columntoggle" data-tablesaw-minimap="" id="table-3973">
		<thead>
		  <tr>
			  <th data-tablesaw-priority="5" class="tablesaw-priority-5 tablesaw-cell-visible"><?php echo e(trans('app.users')); ?></th>
			  <th data-tablesaw-priority="4"><?php echo e(trans('app.locationaddress')); ?></th>
			  <th data-tablesaw-priority="3"><?php echo e(trans('app.userid')); ?></th>	  
			  <th data-tablesaw-priority="2"><?php echo e(trans('app.attdate')); ?></th>
			  
		  </tr>
		</thead>
		<tbody>
		<?php $__currentLoopData = $attendancedata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
			<td class="tablesaw-priority-5 tablesaw-cell-visible"><a href="<?php echo e(URL::to('activity/user/')); ?>/<?php echo e($view->id); ?>"><?php echo e($view->first_name); ?> <?php echo e($view->last_name); ?></a></td>
			  <td class="tablesaw-priority-4"><?php echo e($view->latitude); ?></td>
			  <td class="tablesaw-priority-3"><?php echo e($view->user_id); ?></td>
			  <td class="tablesaw-priority-2"><?php echo e($view->att_date); ?></td>
			  	
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		  
		</tbody>
	  </table>
<div style="clear:both;"></div>
<div style="clear:both;"></div>
<?php echo e($attendancedata->appends(Request::only('search'))->links()); ?>


</div>
<!-- /.col-lg-12 -->
</div>
<div style="clear:both;"></div>
</div>
</div>
</div><br/>


<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>