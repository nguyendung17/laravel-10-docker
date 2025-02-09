<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use Illuminate\Support\Facades\Response;

class AuthController extends Controller
{
    public $successStatus = 200;

    public function signup(SignupRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $user = User::create($data);
        $token = $user->createToken(config('app.passport_key'))->accessToken;

        if ($request->ajax()) {
            return response(['user' => $user, 'token' => $token, 'message' => 'Registration Successful']);
        }
        redirect(route('home'));
    }

    public function login(LoginRequest $request)
    {
        if (!auth()->attempt($request->only(['email','password']))) {
            return response(['error_message' => 'Incorrect Login']);
        }
        $token = auth()->user()->createToken(config('app.passport_key'))->accessToken;
        return response(['user' => auth()->user(), 'token' => $token, 'message' => 'Login Successful']);
    }


    /**
     * details api
     *
     * @return \Illuminate\Http\Response
     */
    public function info()
    {
        $user = Auth::user();

        return response()->json($user, $this->successStatus);
    }

    /**
     * Logout api
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $token = auth()->user()->token();
        $token->revoke();
        $response = ['message' => 'You have been successfully logged out!'];
        return response($response, 200);
    }
}
