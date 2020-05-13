<?php $__env->startSection('content'); ?>
<style>
canvas{
	width: 95% !important;
	max-width: 100%;
	height: auto !important;
}
</style>
<div class="page-content padding-20 container-fluid">
<!------------------------------ Start Alert message--------------->
<div class="alert alert-primary alert-dismissible alertDismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">×</span>
  </button>
 <?php echo e(trans('app.welcome')); ?>  <?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?> !
</div>
<!-------------------------------- End alert message--------------->
	
</div>

<div class="page-content">
      <!-- Panel -->
      <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-md-6">
              <!-- Example Basic -->
              <div class="example-wrap">
                <h4 class="example-title">Different Currency Exchange Rate</h4>
                <div class="example table-responsive">
                  <table class="table">
                    <thead>
					<tr>
                        <th>#</th>
                        <th>Source Country</th>
                        <th>Destination Country</th>
                        <th>Rate</th>
                        
                      </tr>
                    </thead>
                    <tbody>
					 <?php $__currentLoopData = $currencyrate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $_currencyrate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($key+1); ?></td>
                        <td><?php echo e($_currencyrate->from_country); ?></td>
                        <td><?php echo e($_currencyrate->to_country); ?></td>
                        <td><?php echo e($_currencyrate->rate); ?></td>
                        
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- End Example Basic -->
            </div>
			<div class="col-md-6">
              <!-- Favorite -->
              <div class="example-wrap">
                <h4 class="example-title">Favorite Currency Exchange Rate</h4>
                <div class="example table-responsive">
                  <table class="table">
                    <thead>
					<tr>
                        <th>#</th>
                        <th>Source Country</th>
                        <th>Destination Country</th>
                        
                      </tr>
                    </thead>
                    <tbody>
					 <?php $__currentLoopData = $favorite; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $_favorite): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($key+1); ?></td>
                        <td><?php echo e($_favorite->from_country); ?></td>
                        <td><?php echo e($_favorite->to_country); ?></td>
                        
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- End Favorite-->
            </div>
		  </div>
       </div>
    </div>	
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>