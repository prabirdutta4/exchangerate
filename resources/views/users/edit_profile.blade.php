@extends('layouts.template')
@section('content')
<style>
p.redcolor{color:red; font-size:16px;}
.spancolor{color:red;}
.help-block{color:red;}
</style>
<link rel="stylesheet" href="{{URL::to('assets/css')}}/datepicker3.min.css" />
<script src="{{URL::to('assets/js')}}/ui-bootstrap-tpls-0.11.0.js"></script>
<script src="{{URL::to('assets')}}/croppie.js"></script>
  <link rel="stylesheet" href="{{URL::to('assets')}}/croppie.css">
<div class="page-header">
  <h1 class="page-title font_lato">{{$userdata->first_name}} {{$userdata->last_name}}</h1>
  <div class="page-header-actions">
  <ol class="breadcrumb">
		<li><a href="{{URL::to('/dashboard')}}">{{ trans('app.home')}}</a></li>
		<li><a href="{{URL::to('show')}}/{{$userdata->id}}">{{$userdata->first_name}} {{$userdata->last_name}}</a></li>
		<li class="active">{{ trans('app.edit')}}</li>
	</ol>
  </div>
</div>
<div class="page-content" ng-app="app">	
<div class="panel">
<div class="panel-body container-fluid">
<!------------------------start insert, update, delete message ---------------->
<div class="row">
@if(session('msg_success'))
	<div class="alert dark alert-icon alert-success alert-dismissible alertDismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	  </button>
	  <i class="icon wb-check" aria-hidden="true"></i> 
	  {{session('msg_success')}}
	</div>
@endif
@if(session('msg_update'))
	<div class="alert dark alert-icon alert-info alert-dismissible alertDismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	  </button>
	  <i class="icon wb-check" aria-hidden="true"></i> 
	  {{session('msg_update')}}
	</div>
@endif
@if(session('msg_delete'))
	<div class="alert dark alert-icon alert-danger alert-dismissible alertDismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	  </button>
	  <i class="icon wb-check" aria-hidden="true"></i> 
	  {{session('msg_delete')}}
	</div>
@endif
<div class="alert">
   <div id="message" style="display: none" class="alert dark alert-icon alert-dismissible alertDismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	  </button>
	  <i class="icon wb-check" aria-hidden="true"></i> 
	  <span id="messageDetail"></span>
	</div>
</div>
</div>

<div class="col-md-12">
<ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
	<li class="active"><a class="overview" data-toggle="tab" href="#viewdata" title="View Area Data"><i class="glyphicon glyphicon-th"></i> {{ trans('app.details')}} </a></li>
	<li><a data-toggle="tab" title="Auth" class="overview" href="#adddata"><i class="fa fa-lock"></i> {{ trans('app.authentication')}}</a></li>
	<li><a data-toggle="tab" title="Image" class="overview" href="#image"><span class="glyphicon glyphicon-picture"></span> {{ trans('app.change_picture')}}</a></li>
    <li><a data-toggle="tab" title="DocImage" class="overview" href="#docimage"><span class="glyphicon glyphicon-picture"></span> {{ trans('app.change_doc_picture')}}</a></li>
</ul>	
</div>
<div style="clear:both;"></div><br>
<div class="tab-content ">
<div id="viewdata" class="tab-pane fade in active ">
<form  name="userFormmbasic"  action="{{URL::to('update',$userdata->id)}}"  method="POST" novalidate="">
			{{ csrf_field() }}			
<div class="col-sm-12">
	  <!-- Example Basic Form -->	              
			<div class="row">
			  <div class="form-group col-sm-6">
				<label class="control-label" for="inputBasicFirstName">{{ trans('app.first_name')}} <span class="spancolor">*</span> </label>
				<input type="text" class="form-control" id="first_name" ng-model="first_name" name="first_name" ng-init="first_name='{{$userdata->first_name}}'" placeholder="{{ trans('app.firstname')}}" required>
			  </div>
			  <div class="form-group col-sm-6">
				<label class="control-label" for="inputBasicLastName">{{ trans('app.last_name')}} <span class="spancolor">*</span> </label>
				<input type="text" class="form-control" id="last_name" name="last_name" ng-model="last_name" ng-init="last_name='{{$userdata->last_name}}'" placeholder="{{ trans('app.last_name')}}" required>
			  </div>
			</div>
			
			<div class="row">			  
			  <div class="form-group col-sm-6">
				<label class="control-label" for="inputBasicFirstName">{{ trans('app.address')}}</label>
				<!--<textarea class="form-control" id="inputBasicFirstName" name="inputFirstName" placeholder="Address" autocomplete="off"></textarea>-->
				<input type="text" class="form-control" id="address" name="address" value="{{$userdata->address}}" placeholder="{{ trans('app.address')}}" autocomplete="off">
			 </div>
			  <div class="form-group col-sm-6">
				<label class="control-label" for="inputBasicFirstName">{{ trans('app.phone')}}</label>
				<input type="text" class="form-control" id="phone" name="phone" placeholder="{{ trans('app.phone')}}" value="{{$userdata->phone}}" autocomplete="off">
			  </div>			  
			</div>
			<div class="row">			  
			  <div class="form-group col-sm-6">			  
			  <label class="control-label" for="inputBasicFirstName">{{ trans('app.date_of_birth')}}</label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="icon wb-calendar" aria-hidden="true"></i>
                    </span>
                    <input type="text" class="form-control" name="date_of_birth" value="{{$userdata->date_of_birth}}" placeholder="{{ trans('app.date_of_birth')}}" data-plugin="datepicker">
                  </div>
                </div>			  
			  <div class="form-group col-sm-6">
				<label class="control-label">{{ trans('app.country')}} <span class="spancolor">*</span></label>
				<select ng-model="country"  class="form-control" name="country" required ng-init="country = '{{$userdata->country}}'">
					<option   value=""> {{ trans('app.select_country')}} </option>	
					@foreach($country as $data)
						<option value="{{$data->nicename}}">{{$data->nicename}}</option>
					@endforeach
				</select>
			  </div>			  
			</div>
			<div class="row">
			<div class="form-group col-sm-6">
				<label class="control-label">{{ trans('app.gender')}}</label>
			  <div>
			  <div class="btn-group" data-toggle="buttons" role="group">
				  <label class="btn btn-outline btn-primary  {{ (($userdata->gender == 'Male')?'active': '')}}">
					<input type="radio" name="gender" autocomplete="off"  value="Male">
					<i class="icon wb-check text-active" aria-hidden="true"></i>  {{ trans('app.male')}}
				  </label>
				  <label class="btn btn-outline btn-primary {{ (($userdata->gender == 'Female')?'active': '')}}">
					<input type="radio" name="gender" autocomplete="off" value="Female" >
					<i class="icon wb-check text-active" aria-hidden="true"></i> {{ trans('app.female')}}
				  </label>                     
				</div>
				</div>
			  </div>
			  
			</div>
	  
	</div>
	
	<div style="clear:both"></div>
	<div class="form-group col-sm-6">
	<button ng-disabled="userFormmbasic.$invalid" type="submit" class="btn btn-primary ladda-button" data-plugin="ladda" data-style="expand-left"> 
		<span aria-hidden="true" class="glyphicon glyphicon-refresh"></span> {{ trans('app.update_profile_details')}}
		<span class="ladda-spinner"></span><div class="ladda-progress" style="width: 0px;"></div>	</button>
	</div>
</form>
</div>

<!--------------------------- Auth update ------------------->
<div id="adddata" class="tab-pane fade">
<div class="col-lg-12 animated fadeInDown">
<form name="userForm" id="userForm" ng-submit="submitForm(userForm.$valid)" action="{{URL::to('authentication')}}/{{$userdata->id}}" method="post" novalidate="novalidate">
  {{ csrf_field() }}	
  <div class="col-md-6">
<div class="form-group">
		  <label class="control-label" for="inputBasicEmail">{{ trans('app.email_address')}} <span class="spancolor">*</span></label>
		  <input type="email" class="form-control" ng-model="email" ng-init="email='{{$userdata->email}}'" required id="email" name="email" placeholder="{{ trans('app.email_address')}}" autocomplete="off">
		 <p class="help-block" ng-show="userForm.email.$error.email"> Not valid email!</p>
		 @if ($errors->has('email'))
		  <span class="help-block">
		   <strong>{{ $errors->first('email') }}</strong>
		  </span>
		 @endif
		</div>
		 <div class="form-group">
		  <label class="control-label" for="username">{{ trans('app.username')}} <span class="spancolor">*</span></label>
		  <input type="text" class="form-control" id="username" ng-model="username" ng-init="username ='{{$userdata->username}}'" required  name="username" placeholder="{{ trans('app.username')}}" minlength="6" autocomplete="off">
			<p ng-show="userForm.username.$error.minlength" class="help-block">Minimum 6 character</p>
			@if ($errors->has('username'))
		  <span class="help-block">
		   <strong>{{ $errors->first('username') }}</strong>
		  </span>
		 @endif
		</div>
		
		<div class="form-group">
		<label class="control-label" for="inputBasicPassword"> {{ trans('app.password')}} <span class="spancolor">*</span></label>
			<input type="password" class="form-control"  ng-model="password" placeholder="{{ trans('app.password')}}" name="password" required="required" ng-init="password = '{{old('password')}}'" ng-minlength="6"/>
			<div ng-if="userForm.password.$touched || userForm">                    
				<p ng-show="userForm.password.$error.minlength" class="help-block">Minimum 6 character</p>
			</div>
		</div>
		<div class="form-group">
		<label class="control-label" for="inputBasicPassword">{{ trans('app.confirm_password')}} <span class="spancolor">*</span></label>
			<input type="password" class="form-control"  name="confirm_password" ng-model="confirm_password" ng-init="confirm_password = '{{old('confirm_password')}}'" placeholder="{{ trans('app.confirm_password')}}" match-password="password" required >
			<div ng-if="userForm.confirm_password.$touched || userForm">                    
				<p ng-show="userForm.confirm_password.$error.matchPassword && !userForm.confirm_password.$error.required" class="help-block">Confirm password didn't match</p>
			</div>
		</div>
		<div class="bs-example" data-example-id="single-button-dropdown">
	<button type="submit" ng-disabled="userForm.$invalid" class="btn btn-primary ladda-button" data-plugin="ladda" data-style="expand-left">
		<span aria-hidden="true" class="glyphicon glyphicon-refresh"></span> {{ trans('app.update_auth_details')}}
		<span class="ladda-spinner"></span><div class="ladda-progress" style="width: 0px;"></div>
	</button>
</div>
</div>

</form>
</div>
</div>
<!----------------------start image tab--------------------------->
<div id="image" class="tab-pane fade">
<div class="col-lg-6">
<!-----------image crop------->
	
	<div class="panel panel-default">	
	  <div class="panel-body">
			<div id="upload-demo-i" style="background:#a8aeb1; border-radius:7px; width:300px;padding:30px;height:300px;">
			@if(!empty($userdata->image))
					<img src="{{URL::to('uploads')}}/{{$userdata->image}}">						
					@else
						@if($userdata->gender == 'Female')
							<img src="{{URL::to('images/female.png')}}">							
						@else
							<img src="{{URL::to('images/default.png')}}">						  
						@endif							
					@endif						
			
			<!--<img src="uploads/1479725799.PNG"/>-->
			<div style="clear:both;"></div><br/>
			 <button type="button"  class="btn btn-default btn-block" data-toggle="modal" data-target="#myModal"><i class="fa fa-camera"></i>
			Change Photo  </button>
			</div>
	  </div>
	</div>
	<br/>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
	  		<div class="col-md-4 text-center">
				<div id="upload-demo" style="width:350px"></div>
	  		</div><br/>
			<div style="clear:both;"></div>
	  		<div class="col-md-12" id="uploadimage">
				<strong><i class="fa fa-upload"></i> {{ trans('app.select_image')}} <input type="file" id="upload"></strong>			
	  		</div>
			<div style="clear:both;"></div>
	  		
			<div class="col-md-10" id="saveCancenimage" style="display:none;">				
				<div class="col-md-8">				
				<button class="btn btn-primary upload-result"><i class="fa fa-upload" aria-hidden="true"></i> {{ trans('app.update_picture')}}</button>
				<button class="btn btn-danger pull-right cancelbutton" id="cancelbutton">{{ trans('app.remove')}}</button>
				</div>
				
	  		</div>
			</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">{{ trans('app.close')}}</button>
        </div>
      </div>
      
    </div>
  </div>
<!-----------end image crop------->	
<!----------------------end image tab--------------------------->
</div>
</div>
<!----------------------end image tab--------------------------->  
<!----------------------start docimage tab--------------------------->
<div id="docimage" class="tab-pane fade">
    <div class="col-lg-6">
     <form class="form-horizontal" role="form" id="upload_form" method="POST" enctype="multipart/form-data">
                   {{ csrf_field() }}				   
			    <input type="hidden" name="imageusername" value="{{$userdata->username}}" class="form-control">
				<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">

                    <input type="file" name="image" class="form-control" class="upload-doc-image" id="select_file">
                    @if ($errors->has('image'))
							<span class="help-block">
								<strong>{{ $errors->first('image') }}</strong>
							</span>
						@endif
                </div>
				<button type="submit" name="upload" id="upload" class="btn btn-primary ladda-button btn-block" data-plugin="ladda" data-style="expand-left">
			  {{ trans('app.update_picture')}}
		<span class="ladda-spinner"></span><div class="ladda-progress" style="width: 0px;"></div>
		</button>
		</form>
	</div>	
	<div class="col-lg-6">
	    <div id="uploaded_image">
	                @if(!empty($userdata->document_img))
					<img src="{{$userdata->document_img}}" style="background:#a8aeb1; border-radius:7px; width:300px;padding:30px;height:300px;">						
					@else
						@if($userdata->gender == 'Female')
							<img src="{{URL::to('images/female.png')}}" style="background:#a8aeb1; border-radius:7px; width:300px;padding:30px;height:300px;">							
						@else
							<img src="{{URL::to('images/default.png')}}" style="background:#a8aeb1; border-radius:7px; width:300px;padding:30px;height:300px;">						  
						@endif							
					@endif	
        </div>					
	</div>
</div>
<!----------------------end docimage tab--------------------------->  
</div>
<div class="clear:both;"></div>
</div>
<!-- /.row -->
</div>
</div><br/>	
<script type="text/javascript">
$uploadCrop = $('#upload-demo').croppie({
    enableExif: true,
    viewport: {
        width: 200,
        height: 200,
        type: 'circle'
    },
    boundary: {
        width: 300,
        height: 300
    }
});

$('#upload').on('change', function () { 
	var reader = new FileReader();
    reader.onload = function (e) {
    	$uploadCrop.croppie('bind', {
    		url: e.target.result
    	}).then(function(){
			//alert(123);
			$("#uploadimage").hide();
			$("#saveCancenimage").show();
    		console.log('jQuery bind complete');
    	});
    	
    }
    reader.readAsDataURL(this.files[0]);
});

$('.upload-result').on('click', function (ev) {
	$uploadCrop.croppie('result', {
		type: 'canvas',
		size: 'viewport'
	}).then(function (resp) {
		var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

		$.ajax({
			//url: "{{URL::to('upload')}}/{{$userdata->id}}",
			url: "{{URL::to('upload')}}/{{$userdata->id}}",
			 //data: {_token: CSRF_TOKEN},
			type: "POST",
			data: {"image":resp, '_token': CSRF_TOKEN},
			success: function (data) {
				console.log(data);
				html = '<img src="' + resp + '" />';
				$("#upload-demo-i").html(html);
			}
		});
	});
});

 $('#upload_form').on('submit', function(event){
  event.preventDefault();
  $.ajax({
   url:"{{URL::to('uploadDocument')}}/{{$userdata->id}}",
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
    $('#message').css('display', 'block');
    $('#messageDetail').html(data.message);
    $('#message').addClass(data.class_name);
    $('#uploaded_image').html(data.uploaded_image);
   }
  })
 });



$(document).ready(function(){	
	$("#cancelbutton").click(function(){
		//console.log(123);
		$("#uploadimage").show();
		$("#saveCancenimage").hide();
		$('.cr-image').attr('src', '');
	});
	$(".upload-result").click(function(){
		setTimeout(function () { 
		location.reload(1); 
		//setInterval(auto_refresh, 3000);
		}, 3000);
	});
});
//("#cancelbutton")
</script>

<script>
var app = angular.module('app', []);

app.directive("matchPassword", function () {
    return {
        require: "ngModel",
        scope: {
            otherModelValue: "=matchPassword"
        },
        link: function(scope, element, attributes, ngModel) {

            ngModel.$validators.matchPassword = function(modelValue) {
                return modelValue == scope.otherModelValue;
            };

            scope.$watch("otherModelValue", function() {
                ngModel.$validate();
            });
        }
    };
});
</script>	
@stop