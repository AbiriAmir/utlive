@extends('admin.layouts.app')

@section('title')
    افزودن کاربر
@endsection
@section('content')
    <div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">افزودن کاربر</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
        @include('admin.user.form')
    </div><!-- /.box-body -->
</div><!-- /.box -->
@endsection