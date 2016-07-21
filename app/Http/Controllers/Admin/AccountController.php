<?php

namespace App\Http\Controllers\Admin;

use App\Account;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Storage;
use View;

class AccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
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

    public function show(Request $request, Account $account) {
        $v = view('account.html', compact('account'));
        $code = $v->render();
        return view('admin.account.show', compact('account', 'code'));
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
        $account = Account::create($data);
        if($account)
            return redirect()->route('admin::admin.account.show', ['account' => $account])->withFlashMessage('اکانت با موفقیت افزوده شد')->with(
                [
                    'download_config'   => 1,
                    'password'          => $request->input('password'),
                    'account'           => $account,
                ]
            );
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
        return redirect()->route('admin::admin.account.show', ['account' => $account])->withFlashMessage('اکانت با موفقیت ویرایش شد');
    }

    public function destroy(Request $request, Account $account) {
        $account->delete();

        return redirect()->route('admin::admin.account.index')->withFlashMessage('اکانت با موفقیت حذف شد');
    }


    public function download(Request $request, Account $account) {

        $this->validate($request, [
            'password'      => 'required|min:6|confirmed',
        ]);

        $account->update([
            'password'  => bcrypt($request->input('password')),
        ]);

        $view = View::make('account.config', [
            'account'   => $account,
            'password'  => $request->input('password'),
        ]);

        $contents = $view->render();


        $filename = "configs/" . sha1($account->stream_name) . ".wcst";
        Storage::disk('local')->put($filename, $contents);

        return response()->download( storage_path("app/$filename") );


    }
}
