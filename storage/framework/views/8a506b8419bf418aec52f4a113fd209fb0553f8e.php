<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/assets/examples/css/pages/profile.css">
<div class="page-header">
  <h1 class="page-title font_lato"><?php echo e(trans('app.profile_details')); ?></h1>
  <div class="page-header-actions">
	<ol class="breadcrumb">
		<li><a href="<?php echo e(URL::to('/dashboard')); ?>"><?php echo e(trans('app.home')); ?></a></li>
		<li class="active"><?php echo e($userdata->first_name); ?> <?php echo e($userdata->last_name); ?></li>
	</ol>
  </div>
</div>

<div class="page-content container-fluid page-profile">
  <div class="row">
	<div class="col-md-3">
	  <!-- Page Widget -->
	  <div class="widget widget-shadow text-center">
		<div class="widget-header">
		  <div class="widget-header-content">
			<a class="avatar avatar-lg" href="javascript:void(0)">
			<?php if(!empty($userdata->image)): ?>
				<img class="img-responsive img-circle" src="<?php echo e(URL::to('uploads')); ?>/<?php echo e($userdata->image); ?>" width="170" height="170"  />
			<?php else: ?>
				<?php if($userdata->gender == 'Female'): ?>
					<img class="img-responsive img-circle" src="<?php echo e(URL::to('images/female.png')); ?>" width="170" height="170"  />	
				<?php else: ?>
				<img class="img-responsive img-circle" src="<?php echo e(URL::to('images/default.png')); ?>" width="170" height="170"  />
				<?php endif; ?>
			<?php endif; ?>
			</a>
			<h4 class="profile-user"><?php echo e($userdata->first_name); ?> <?php echo e($userdata->last_name); ?></h4>
		   <p class="profile-job"><?php echo e(trans('app.role')); ?> - <?php echo e($userdata->role); ?></p>               
			
		  </div>
		</div>
		
	  </div>
	  <!-- End Page Widget -->
	</div>
	
	
	<div class="col-md-9">
	  <!-- Panel -->
	  <div class="panel">
		<div class="panel-body nav-tabs-animate nav-tabs-horizontal">
		<!------------------------start insert, update, delete message ---------------->
			<div class="col-lg-12">
			<?php if(session('msg_success')): ?>
				<div class="alert dark alert-icon alert-success alert-dismissible alertDismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">×</span>
				  </button>
				  <i class="icon wb-check" aria-hidden="true"></i> 
				  <?php echo e(session('msg_success')); ?>

				</div>
			<?php endif; ?>
			<?php if(session('msg_update')): ?>
				<div class="alert dark alert-icon alert-info alert-dismissible alertDismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">×</span>
				  </button>
				  <i class="icon wb-check" aria-hidden="true"></i> 
				  <?php echo e(session('msg_update')); ?>

				</div>
			<?php endif; ?>
			<?php if(session('msg_delete')): ?>
				<div class="alert dark alert-icon alert-danger alert-dismissible alertDismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">×</span>
				  </button>
				  <i class="icon wb-check" aria-hidden="true"></i> 
				  <?php echo e(session('msg_delete')); ?>

				</div>
			<?php endif; ?>
			</div>
			<a class="btn btn-icon btn-info btn-outline btn-round pull-right" href="<?php echo e(URL::to('profileEdit')); ?>" data-toggle="tooltip" data-original-title="<?php echo e(trans('app.edit_user')); ?>" ><i class="icon wb-pencil" aria-hidden="true"></i> </a>
				
		  <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
			<li role="presentation" class=""><a data-toggle="tab" href="#profile" aria-controls="profile" role="tab" aria-expanded="false">Profile</a></li>
			<li class="dropdown" role="presentation" style="display: none;">
			  <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
				<span class="caret"></span>Menu </a>
			  <ul class="dropdown-menu" role="menu">
				<li role="presentation" style="display: none;"><a data-toggle="tab" href="#profile" aria-controls="profile" role="tab">Profile</a></li>
			  </ul>
			</li>
		  </ul>
		  <div class="tab-content">

<!------- Profile tab------------->
			<div class="tab-pane animation-slide-left" id="profile" role="tabpanel">
			<table class="table table-hover table-details">
				<thead>
					<tr>
						<th rowspan="4"><?php echo e(trans('app.contact_informations')); ?></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo e(trans('app.email')); ?></td>
						<td><a href="#"><?php echo e($userdata->email); ?></a></td>
					</tr>  
					<tr>
						<td><?php echo e(trans('app.username')); ?></td>
						<td><a href="#"><?php echo e($userdata->username); ?></a></td>
					</tr>                        
				 </tbody>
			</table>
			<p style="border-bottom:1px dashed green;"></p>

			<table class="table table-hover dataTable table-striped width-full dtr-inline">
				<thead>
				<tr>
					<th rowspan="4"><?php echo e(trans('app.additional_informations')); ?></th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td><?php echo e(trans('app.country')); ?></td>
					<td><?php echo e($userdata->country); ?></td>
				</tr>
				<tr>
					<td><?php echo e(trans('app.gender')); ?></td>
					<td><?php echo e($userdata->gender); ?></td>
				</tr>
				<tr>
					<td><?php echo e(trans('app.phone')); ?></td>
					<td><?php echo e($userdata->phone); ?></td>
				</tr>
				
				
				<tr>
					<td><?php echo e(trans('app.date_of_birth')); ?></td>
					<td><?php echo e($userdata->date_of_birth); ?></td>
				</tr>
				<tr>
					<td><?php echo e(trans('app.status')); ?></td>
					<td><?php echo e($userdata->status); ?></td>
				</tr>
				<tr>
					<td><?php echo e(trans('app.address')); ?></td>
					<td><?php echo e($userdata->address); ?></td>
				</tr>
				
				</tbody>
			</table>
			</div>

		  </div>
		</div>
	  </div>
	  <!-- End Panel -->
	</div>
  </div>
</div><br/>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>