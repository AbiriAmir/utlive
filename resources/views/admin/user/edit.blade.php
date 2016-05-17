@extends('admin.layouts.app')

@section('title')
    ویرایش اکانت
@endsection
@section('content')
    <div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">ویرایش اکانت</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
        @include('admin.user.form', ['model' => $user])
    </div><!-- /.box-body -->
</div><!-- /.box -->
@endsection