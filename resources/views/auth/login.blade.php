@extends('layouts.app')

@section('content')
 
<body class="page-login layout-full page-dark">
<div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
  data-animsition-out="fade-out">
    @foreach($settingdata as $view)	
	<div class="page-content vertical-align-middle" style="background: rgba(40, 41, 41, 0.17);">
      <div class="brand">
	  <img class="navbar-brand-logo" style="height:50px" src="{{URL::to('/')}}/uploads/{{$view->logo}}" title="Location"/>      
        <h2 class="brand-text"> {{$view->app_name}}</h2>
      </div>
      <p> {{ trans('app.sing_into_your_pages_account')}}</p>
       <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}         
		 
		<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					
						<input id="email" type="text" class="form-control" placeholder="{{ trans('app.username')}} OR {{ trans('app.email_address')}} " name="email" value="{{ old('email') }}" required>

						@if ($errors->has('email'))
							<span class="help-block">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
						@endif					
				</div>
			
		 <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">			
				<input id="password" type="password" required class="form-control" name="password" placeholder="{{ trans('app.password')}}">

				@if ($errors->has('password'))
					<span class="help-block">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
				@endif
		</div>
		
          <div class="form-group clearfix">
		  @if($view->remember_me == 'ON')
            <div class="checkbox-custom checkbox-inline checkbox-primary pull-left">
              <input type="checkbox" id="remember" name="checkbox">
              <label for="inputCheckbox">{{ trans('app.remember_me')}}</label>
            </div>
			@endif

			
		  </div>
          <!--<button type="submit" class="btn btn-primary btn-block" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Loading..">{{ trans('app.sign_in')}}</button>-->
        
		<button type="submit" class="btn btn-primary ladda-button btn-block" data-plugin="ladda" data-style="expand-left">
			  {{ trans('app.sign_in')}}
		<span class="ladda-spinner"></span><div class="ladda-progress" style="width: 0px;"></div>
		</button>
		
		</form>
		 <p>{{ trans('app.still_no_account_please_go_to')}} <a href="{{ url('/register') }}"> {{ trans('app.register')}} </a></p>
      
    </div>
    
@endforeach
@endsection