@extends('admin.layouts.app')

@section('siteTitle')
        مدیریت
@endsection

@section('content')
        <!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>{{ \App\Account::count() }}</h3>
                <p>کاربر استریمینگ</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="{{ route('admin::admin.account.index') }}" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>&nbsp;</h3>
                <p>افزودن کاربر</p>
            </div>
            <div class="icon">
                <i class="ion ion-plus"></i>
            </div>
            <a href="{{ route('admin::admin.account.index') }}" class="small-box-footer">افزودن <i class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <div class="row">
            <div class="col-xs-12" style="text-align: center;">
               <h2> سامانه‌ی مدیریت کاربران پخش زنده‌ی ویدئو</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <p>
                    توسط این سامانه می‌توانید اهراز هویت پخش زنده را مدیریت نمایید.
                </p>
                <p>
                    <strong>دست‌اندرکاران: </strong><br/>
                    احسان حاج‌یاسینی <br/>
                    مهران میدانی<br/>
                    امیرحسین عبیری
                </p>
            </div>
        </div>
    </div>
</div>
@endsection