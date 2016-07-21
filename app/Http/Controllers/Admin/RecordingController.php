<?php

namespace App\Http\Controllers\Admin;

use App\Account;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Storage;
use View;

class RecordingController extends Controller
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
        $recordings = Storage::disk('recording')->files();
        return view('admin.recording.index', compact('recordings'));
    }


    public function create() {
        return view('admin.recording.new');
    }


    public function store(Request $request) {

        $this->validate($request, [
            'file'  => 'required|mimes:flv'
        ]);

        Storage::disk('recording')->put(
            $request->file('file')->getClientOriginalName(),
            file_get_contents($request->file('file')->getRealPath())
        );

        return redirect()->route('admin::admin.recording.index')->withFlashMessage('فایل با موفقیت آپلود شد.');
    }

    public function destroy(Request $request, $recording) {
        Storage::disk('recording')->delete($recording);

        return redirect()->route('admin::admin.recording.index')->withFlashMessage('فایل با موفقیت حذف شد');
    }
}
