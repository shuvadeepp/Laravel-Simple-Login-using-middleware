<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppController;
use Illuminate\Http\Request;
use App\Models\userModels;
use Validator;
use DB;

class loginController extends Controller
{
    /* FOR LOGIN */
    public function login () {
        // echo 1111;exit;
        
        if(!empty(request()->all()) && request()->isMethod('post')) {
            $requestData = request()->all();
            // print_r($requestData);exit;
            /* SERVER SIDE VALIDATION */
            $validator = validator::make($requestData,
                [
                    'userName'        => 'bail|required|max:128',
                    'userPassword'    => 'bail|required'   
                ]
            );

            if($validator->fails()) {
                return redirect('login')->withErrors($validator)->withInput();
            } else { 
                $userName       = $requestData['userName'];
                $userPassword   = $requestData['userPassword'];

                $query = userModels::from('userloginmodule.logintable')
                    ->select('vchUname','vchUemail','vchUpassword','loginType')
                    ->where(
                        [
                            ['vchUname', $userName],
                            ['vchUpassword', $userPassword],
                            ['loginType', 1]
                        ]
                    )
                    ->orWhere(
                        [
                            ['vchUemail', $userName],
                            ['vchUpassword', $userPassword],
                            ['loginType', 1]
                        ]
                    )
                    ->get()->toArray();

                if(empty($query)) {
                    $status['status'] = 'error';
                    $status['errDiv'] = "Invalid User Credential.";
                } else {
                    session(['UserSession' => $query[0]]); 
                    return redirect('dashboard');
                }

                if ($status['status'] == 'error') {
                    return redirect('login')->withErrors($validator)->withInput();
                }
            }
        }

        return view('login');
    }

    public function logout () { 
        //\Auth::logout();
        //request()->session()->flush();
        // echo '<pre>';print_r(session()->all());exit;
        session()->flush();
        //request()->session()->regenerate(true);
        $cookie         = \Cookie::forget('PHPSESSID');
        $laravelcookie  = \Cookie::forget('laravel_session');
        return redirect('/');
    }

}
