<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use App\Repositories\User\UserRepository;
use App\Http\Requests;
use App\User;
use DB;
use Auth;
use Carbon\Carbon;
use Session;
use App\Foo;
use View;
use App\CurrencyRate;
use App\Favorite;

class DashboardController extends Controller
{
	
	  /**
     * Display a listing of the __construct.
     *
     * @return \Illuminate\Http\Response
     */
	 private $activities;
	 protected $foo;
	public function __construct(Foo $foo)
	{	
       $this->middleware('auth');	 
	   $this->foo = $foo;
    }
	
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	
	public function index(Request $request){
			$currencyrate = CurrencyRate::groupBy('from_currency')->groupBy('to_currency')->orderBy('id','desc')->get();
			$favorite = Favorite::take(5)->where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
            return view('dashboard.dashboard_user',compact('currencyrate','favorite')); 
	}

	

}
