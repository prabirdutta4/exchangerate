<?php

namespace App\Http\Controllers\Auth;
use Mail;
use App\User;
use Validator;
use DB;
use App\Traits\ImageUpload;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
	
	use ImageUpload; //Using our created Trait to access inside trait method


    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return  Validator::make($data, [
            'username' => 'required|min:6|unique:users',
            'email' => 'required|email|max:255|unique:users',
           // 'password' => 'required|min:6|confirmed',
		   'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
		
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
		$filePath = $this->UserImageUpload($data['image'],$data['username']); //Passing $data->image as parameter to our created method
		 $_data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
         $password = substr(str_shuffle($_data), 0, 7); // generate password
         $savedata = User::create([
		    'status' => 'Active',
            'first_name' => $data['username'],
            'role' => 'User',
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($password),
			'document_img' => $filePath,
        ]);
		$insertedId = $savedata->id;
		DB::table('role_user')->insert(['user_id' => $insertedId, 'role_id' => 2]);
		// Sending user credential to user email
		$useremail = $data['email'];
		$username = $data['username'];
		$dataarray = array(
                    'user' => $useremail
					);

		$data = array(
                        'username' => $username,
						'email' => $useremail,
						'password' => $password,
						
                  );
		 Mail::send('users.welcome', $data, function($message) use ($dataarray)
          {
             $message->from('contact@sonim.info');
             $message->to($dataarray['user']);
			       $message->subject('welcome!');
           });
        return $savedata;
	}
}
