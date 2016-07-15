<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;

use App\Http\Requests;
use Hash;
use Validator;

class AuthenticationController extends Controller
{

    public function postLogin(Request $request) {
        $validator = Validator::make($request->all(), [
            'username'  => 'required|exists:accounts,username',
            'password'  => 'required',
            'name'   => 'required',
        ]);

        if($validator->fails())
            abort(403, 'Validation Failed');

        $account = Account::where('username', $request->get('username'))
            ->where('stream_name', $request->input('name'))
            ->active()
            ->first();

        if($account == null)
            abort(403, 'User not found');

        if(!Hash::check($request->get('password'), $account->password))
            abort(403, "Password wasn't matched");

        return response('Ok!', 200);
    }

}
