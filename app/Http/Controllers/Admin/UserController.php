<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
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
        $users = User::latest()->get(); //->paginate(20);
        return view('admin.user.index')->with('users', $users);
    }


    public function create() {
        return view('admin.user.new');
    }


    public function store(Request $request) {
        $this->validate($request, [
            'name'          => 'required|max:255',
            'email'      => 'required|email|max:255|unique:users,email',
            'password'      => 'required|min:6|confirmed',
        ]);

        $data = $request->all();
        $data['password'] = bcrypt($request->input('password'));
        if(User::create($data))
            return redirect()->route('admin::admin.user.index')->with('message', 'اکانت با موفقیت افزوده شد');
        else
            return redirect()->route('admin::admin.user.index')->withErrors('خطا!');

    }


    public function edit(Request $request, User $user) {
        return view('admin.user.edit')->with('user', $user);
    }

    public function update(Request $request, User $user) {

        $this->validate($request, [
            'name'          => 'required|max:255',
            'email'      => 'required|email|max:255|unique:users,email',
            'password'      => 'min:6|confirmed',
        ]);

        $data = !$request->has('password') ? $request->except('password') : $request->all();

        if(isset($data['password']))
            $data['password'] = bcrypt($data['password']);
        
        $user->update($data);
        return redirect()->route('admin::admin.user.index')->with('message', 'اکانت با موفقیت ویرایش شد');
    }
}
