<?php $__env->startSection('content'); ?>

<style>
  .panel-heading+.panel-body {
    padding-top: 8px;
}
#currency{margin-bottom: 10px; display: block;}
</style>


<div class="row">
	<div class="col-xs-12 text-center">
	<h1 class="section-heading"><span class="market-text">Currency Converter</span></h1>
	<hr>
	<h4><span class="market-text-alt">A Currency Conversion Widget</span></h4>
	</div>
</div>
<div class="row" style="margin-top: 25px;">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
         <div class="panel panel-primary">
               <div class="panel-heading">Currency Converter</div>
               <div class="panel-body text-center">
                   <div id="currency">
				    <form class="form-inline" id="currency-form" class="form-horizontal" role="form" method="POST">
					 <?php echo e(csrf_field()); ?>	
                       <div class="form-group">
					     <div class="col-xs-9">
                            <div class="input-group col-xs-3">
							    <input type="hidden" name="source" id="source">
								<select ng-model="country"  class="form-control" id="from_country" name="from_country" required ng-init="country = '<?php echo e(old('country')); ?>'">
									<option value=""><?php echo e(trans('app.select_country')); ?> </option>	
									<?php $__currentLoopData = $country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($data->code); ?>"><?php echo e($data->country); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
                            </div>
							<div class="input-group col-xs-3">
							<input type="number" name="amount" class="btn-small-fullscreen form-control" min="1" required placeholder="Amount">
							</div>
							<div class="input-group col-xs-3">
							    <input type="hidden" name="destination" id="destination">
						        <select ng-model="country"  class="form-control" id="to_country" name="to_country" required ng-init="country = '<?php echo e(old('country')); ?>'">
									<option value=""><?php echo e(trans('app.select_country')); ?> </option>	
									<?php $__currentLoopData = $country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($data->code); ?>"><?php echo e($data->country); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
						    </div>	
						 </div>	
						 <div class="col-xs-3"> 
<button type="submit" data-type="convert" class="currency-submit-button btn btn-primary btn-small-fullscreen"><i class="fa fa-fw fa-cogs"></i> Convert</button>
<button id="favorite" type="button" data-type="convert" class="currency-submit-button btn btn-primary btn-small-fullscreen"><i class="fa fa-fw fa-cogs"></i> Make Favorite</button>	
                         </div>
                        </div>
                    </form>
				
					</div>
					
					<div class="alert" id="alert-message-fav" style="display: none">
						   <div id="message-fav" style="display: none" class="alert dark alert-icon alert-dismissible alertDismissible" role="alert">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							  </button>
							  <i class="icon wb-check" aria-hidden="true"></i> 
							  <span id="messageDetail-fav"></span>
							</div>
						</div>
					
					   <div class="alert" id="alert-message" style="display: none">
						   <div id="message" style="display: none" class="alert dark alert-icon alert-dismissible alertDismissible" role="alert">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							  </button>
							  <i class="icon wb-check" aria-hidden="true"></i> 
							  <span id="messageDetail"></span>
							</div>
						</div>
					
             </div>
         </div>

    </div>
</div>
<script type="text/javascript">
$('#currency-form').on('submit', function(event){
  event.preventDefault();
  $.ajax({
   url:"<?php echo e(URL::to('getexchangerate')); ?>",
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
	   debugger;
	$('#alert-message').css('display', 'block');   
    $('#message').css('display', 'block');
    $('#messageDetail').html(data.message);
    $('#message').addClass(data.class_name);
    
   }
  })
 });
 $('#from_country').on('change', function () { 
    var source = $("#from_country option:selected").text();
    $('#source').val(source);
	
 });
 $('#to_country').on('change', function () { 
    var destination = $("#to_country option:selected").text();
	$('#destination').val(destination);
 });
 $('#favorite').on('click', function (ev) {
	
		var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var source = $('#source').val();
		var destination = $('#destination').val();
		if(source!="" && destination!=""){
		$.ajax({
			url: "<?php echo e(URL::to('favorite')); ?>",
			type: "POST",
			data: {"source":source,"destination":destination, '_token': CSRF_TOKEN},
			success: function (data) {
				$('#alert-message-fav').css('display', 'block');   
				$('#message-fav').css('display', 'block');
				$('#messageDetail-fav').html(data.message);
				$('#message-fav').addClass(data.class_name);
			}
		});
	    }
});
 </script>
<div style="height: 50px;"></div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>