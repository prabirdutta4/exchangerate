@extends('layouts.template')
@section('content')
<link rel="stylesheet" href="{{URL::to('/')}}/global/vendor/filament-tablesaw/tablesaw.css">
<div class="page-header">
  <h1 class="page-title font_lato">{{ trans('app.attendance')}} </h1>
  <div class="page-header-actions">
	<ol class="breadcrumb">
		<li><a href="{{URL::to('/dashboard')}}">{{ trans('app.home')}}</a></li>
		<li class="active">{{ trans('app.attendance')}}</li>
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
	<form class="form-inline ng-pristine ng-valid" action="{{URL::to('attendance/userlist')}}" method="get"> 
		<div class="form-group">  
			<input type="text" name="search" class="form-control" id="search" placeholder="{{ trans('app.search')}}" value="{{Request::get('search')}}" > 
		
		<button type="submit" class="btn btn-outline btn-default"><i class="icon fa-search" aria-hidden="true"></i></button>
		 
		@if (Request::get('search') != '')
	   <a href="{{URL::to('attendance/userlist')}}" class="btn btn-outline btn-danger" type="button">
		  <i class="icon fa-remove" aria-hidden="true"></i>
		</a>
	@endif
	</div>
	</form>
</div>
</div>
<div style="clear:both;"></div><br/>
<table class="tablesaw table-striped table-bordered tablesaw-columntoggle" data-tablesaw-mode="columntoggle" data-tablesaw-minimap="" id="table-3973">
		<thead>
		  <tr>
			  <th data-tablesaw-priority="5" class="tablesaw-priority-5 tablesaw-cell-visible">{{ trans('app.users')}}</th>
			  <th data-tablesaw-priority="4">{{ trans('app.locationaddress')}}</th>
			  <th data-tablesaw-priority="3">{{ trans('app.userid')}}</th>	  
			  <th data-tablesaw-priority="2">{{ trans('app.attdate')}}</th>
			  
		  </tr>
		</thead>
		<tbody>
		@foreach($attendancedata as $view)
			<tr>
			<td class="tablesaw-priority-5 tablesaw-cell-visible"><a href="{{URL::to('activity/user/')}}/{{$view->id}}">{{$view->first_name}} {{$view->last_name}}</a></td>
			  <td class="tablesaw-priority-4">{{$view->latitude}}</td>
			  <td class="tablesaw-priority-3">{{$view->user_id}}</td>
			  <td class="tablesaw-priority-2">{{$view->att_date}}</td>
			  	
			</tr>
		@endforeach
		  
		</tbody>
	  </table>
<div style="clear:both;"></div>
<div style="clear:both;"></div>
{{$attendancedata->appends(Request::only('search'))->links() }}

</div>
<!-- /.col-lg-12 -->
</div>
<div style="clear:both;"></div>
</div>
</div>
</div><br/>


@stop



