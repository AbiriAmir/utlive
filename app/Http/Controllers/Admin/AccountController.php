<?php

namespace App\Http\Controllers\Admin;

use App\Account;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Account::latest()->get(); //->paginate(20);
        return view('admin.account.index')->with('accounts', $accounts);
    }


    public function create() {
        return view('admin.account.new');
    }


    public function store(Request $request) {
        $this->validate($request, [
            'name'          => 'required|max:255',
            'stream_name'   => 'required|max:255',
            'username'      => 'required|max:255|unique:accounts,username',
            'password'      => 'required|min:6|confirmed',
        ]);

        $data = $request->all();
        $data['password'] = bcrypt($request->input('password'));
        if(Account::create($data))
            return redirect()->route('admin::admin.account.index')->with('message', 'اکانت با موفقیت افزوده شد');
        else
            return redirect()->route('admin::admin.account.index')->withErrors('خطا!');

    }


    public function edit(Request $request, Account $account) {
        return view('admin.account.edit')->with('account', $account);
    }

    public function update(Request $request, Account $account) {

        $this->validate($request, [
            'name'          => 'required|max:255',
            'stream_name'   => 'required|max:255',
            'username'      => 'required|max:255|unique:users,username',
            'password'      => 'min:6|confirmed',
        ]);

        $data = !$request->has('password') ? $request->except('password') : $request->all();

        if(isset($data['password']))
            $data['password'] = bcrypt($data['password']);
        
        $account->update($data);
        return redirect()->route('admin::admin.account.index')->with('message', 'اکانت با موفقیت ویرایش شد');
    }
}
