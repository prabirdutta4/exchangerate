<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use App\User;
use App\Message;
use DB;
use Auth;
use Session;
use App\Foo;
use View;
use Route;
use Currency;
use App\CurrencyRate;
use App\Favorite;

class ExchangeRateController extends Controller
{
	
	  /**
     * Display a listing of the __construct.
     *
     * @return \Illuminate\Http\Response
     */
	 protected $foo;
	public function __construct(Foo $foo){		
       $this->middleware('auth');	 
	   $this->foo = $foo;
	  /* if((Route::currentRouteAction() != 'App\Http\Controllers\ExchangeRateController@getexchangerate') && (Route::currentRouteAction() != 'App\Http\Controllers\ExchangeRateController@index')){
			 $this->middleware('permission:exchangerate.search');
		} */
	   $this->middleware('permission:exchangerate.search');
    }
	
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */	
	public function index(Request $request){
		$country = DB::table('currencies')->get();
		 return view('exchangerate.exchange_rate',compact('country')); 
	}
	/**
     * Get ExchangeRate
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
	 */

	public function getexchangerate(Request $request) 
    { 
	    $success = 1;
	    $source = $request->source;
		$destination = $request->destination;
		$from_country = $request->from_country;
		$to_country = $request->to_country;
		$amount = $request->amount;
		$decimals = 2;
		//$decimals = 'money';
		$_data = Currency::conv($from_country, $to_country, $amount, $decimals);
		if($_data==0){
			$currencyrate = CurrencyRate::select('rate')->where('from_currency',$from_country)->where('to_currency',$to_country)->orderBy('id','desc')->first();
            if(!empty($currencyrate)){
			   $_data = $currencyrate->rate * $amount;	
            }else{
               $_data = "We cant proceed your request now!" ;
               $success = 0;
			} 			   
		}else{	
		    $_arraydata = array('from_country'=>$source,'to_country'=>$destination,'from_currency'=>$from_country,'to_currency'=>$to_country,'rate'=>$_data);
		    CurrencyRate::insert($_arraydata);
		}
		if($success==0)
			$class_name = 'alert-danger';
		else
			$class_name = 'alert-success';
		return response()->json([
							   'message'   => $_data,
							   'class_name'  => $class_name
							  ]);
    }
	
	/**
     * Make Favorite
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
	 */

	public function makefavorite(Request $request) 
    { 
	    $id = Auth::user()->id;
	    $source = $request->source;
		$destination = $request->destination;
		$_arraydata = array('from_country'=>$source,'to_country'=>$destination,'user_id'=>$id);
		Favorite::insert($_arraydata);
		$_data = "Favorite Successfully!";
		$class_name = 'alert-success';
		return response()->json([
							   'message'   => $_data,
							   'class_name'  => $class_name
							  ]);
    }
	
	
}
