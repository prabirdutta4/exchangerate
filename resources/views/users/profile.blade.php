@extends('layouts.template')
@section('content')
<link rel="stylesheet" href="{{URL::to('/')}}/assets/examples/css/pages/profile.css">
<div class="page-header">
  <h1 class="page-title font_lato">{{ trans('app.profile_details')}}</h1>
  <div class="page-header-actions">
	<ol class="breadcrumb">
		<li><a href="{{URL::to('/dashboard')}}">{{ trans('app.home')}}</a></li>
		<li class="active">{{$userdata->first_name}} {{$userdata->last_name}}</li>
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
			@if(!empty($userdata->image))
				<img class="img-responsive img-circle" src="{{URL::to('uploads')}}/{{$userdata->image}}" width="170" height="170"  />
			@else
				@if($userdata->gender == 'Female')
					<img class="img-responsive img-circle" src="{{URL::to('images/female.png')}}" width="170" height="170"  />	
				@else
				<img class="img-responsive img-circle" src="{{URL::to('images/default.png')}}" width="170" height="170"  />
				@endif
			@endif
			</a>
			<h4 class="profile-user">{{$userdata->first_name}} {{$userdata->last_name}}</h4>
		   <p class="profile-job">{{ trans('app.role')}} - {{$userdata->role}}</p>               
			
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
			</div>
			<a class="btn btn-icon btn-info btn-outline btn-round pull-right" href="{{URL::to('profileEdit')}}" data-toggle="tooltip" data-original-title="{{ trans('app.edit_user')}}" ><i class="icon wb-pencil" aria-hidden="true"></i> </a>
				
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
						<th rowspan="4">{{ trans('app.contact_informations')}}</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>{{ trans('app.email')}}</td>
						<td><a href="#">{{$userdata->email}}</a></td>
					</tr>  
					<tr>
						<td>{{ trans('app.username')}}</td>
						<td><a href="#">{{$userdata->username}}</a></td>
					</tr>                        
				 </tbody>
			</table>
			<p style="border-bottom:1px dashed green;"></p>

			<table class="table table-hover dataTable table-striped width-full dtr-inline">
				<thead>
				<tr>
					<th rowspan="4">{{ trans('app.additional_informations')}}</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>{{ trans('app.country')}}</td>
					<td>{{$userdata->country}}</td>
				</tr>
				<tr>
					<td>{{ trans('app.gender')}}</td>
					<td>{{$userdata->gender}}</td>
				</tr>
				<tr>
					<td>{{ trans('app.phone')}}</td>
					<td>{{$userdata->phone}}</td>
				</tr>
				
				
				<tr>
					<td>{{ trans('app.date_of_birth')}}</td>
					<td>{{$userdata->date_of_birth}}</td>
				</tr>
				<tr>
					<td>{{ trans('app.status')}}</td>
					<td>{{$userdata->status}}</td>
				</tr>
				<tr>
					<td>{{ trans('app.address')}}</td>
					<td>{{$userdata->address}}</td>
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

@stop