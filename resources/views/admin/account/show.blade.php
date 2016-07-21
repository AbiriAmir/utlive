@extends('admin.layouts.app')

@section('title')
    مشخصات اکانت
@endsection
@section('content')
    @if(Session::has('download_config'))
        <div class="alert flash-message text-center alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>


            کاربر گرامی، برای دریافت فایل تنظیمات استریمینگ روی دکمه‌ی زیر کلیک کنید.

            {!! Form::open(['method' => 'post', 'route' => ['admin::admin.account.download', Session::get('account')]]) !!}
            {!! Form::hidden('password', Session::get('password')) !!}
            {!! Form::hidden('password_confirmation', Session::get('password')) !!}
            {!! Form::submit('دانلود', ['class' => 'btn btn-info']) !!}
            {!! Form::close() !!}
        </div>
    @endif
    <div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">مشخصات اکانت</h3>

        <span style="float: left;"><a href="{{ route('admin::admin.account.index') }}"> بازگشت</a></span>
    </div><!-- /.box-header -->
    <div class="box-body">
        <pre style="direction: ltr;">{{ $code }}</pre>
    </div><!-- /.box-body -->
</div><!-- /.box -->
@endsection
