@extends('admin.layouts.app')

@section('title')
    افزودن اکانت
@endsection
@section('content')
    <div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">افزودن اکانت</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
        @include('admin.account.form')
    </div><!-- /.box-body -->
</div><!-- /.box -->
@endsection


@section('js')
    @parent
    <script type="text/javascript" src="{{ asset('assets/datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/datepicker/bootstrap-datepicker.fa.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#start_date").datepicker({
                isRTL: true,
                minDate: 0,
                dateFormat: 'yy/mm/dd'
            });

            $("#end_date").datepicker({
                isRTL: true,
                minDate: 0,
                dateFormat: 'yy/mm/dd'
//
//				showButtonPanel: true,
//				changeMonth: true,
//				changeYear: true

            });
        });
    </script>
@endsection