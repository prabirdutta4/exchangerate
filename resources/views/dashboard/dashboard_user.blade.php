@extends('layouts.template')
@section('content')
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
 {{ trans('app.welcome')}}  {{Auth::user()->first_name}} {{Auth::user()->last_name}} !
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
					 @foreach($currencyrate as $key => $_currencyrate)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$_currencyrate->from_country}}</td>
                        <td>{{$_currencyrate->to_country}}</td>
                        <td>{{$_currencyrate->rate}}</td>
                        
                      </tr>
                      @endforeach
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
					 @foreach($favorite as $key => $_favorite)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$_favorite->from_country}}</td>
                        <td>{{$_favorite->to_country}}</td>
                        
                      </tr>
                      @endforeach
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
@stop
