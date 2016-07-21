@extends('admin.layouts.app')


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
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">لیست اکانت‌ها</h3> &nbsp;&nbsp;&nbsp; <span style="font-size: 0.8em;">[ <a href="{{ route('admin::admin.account.create') }}">افزودن</a> ]</span>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="account-data" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>نام سرویس</th>
                            <th>نام کاربری</th>
                            <th>تاریخ شروع سرویس</th>
                            <th>تاریخ پایان سرویس</th>
                            <th>تاریخ ایجاد</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $no = 0 ?>

                        @foreach($accounts as $account)
                        <tr>
                            <?php $no++ ?>
                            <td>{{ $no }}</td>
                            <td>{{ $account->name }}</td>
                            <td>{{ $account->username }}</td>
                            <td>{{ $account->start_date }}</td>
                            <td>{{ $account->end_date }}</td>
                            <td>{{ jDate::forge($account->created_at)->format('datetime') }}</td>
                            <td>
                                <a href="{{ route('admin::admin.account.edit', ['account' => $account]) }}"><i class="fa fa-pencil"></i> </a>
                                {{--<a href="{{ route('admin::admin.account.destroy', ['account' => $account]) }}"><i class="fa fa-trash"></i> </a>--}}

                                @include('admin.partials.delete', ['data' => $account, 'name' => 'account'])

                                @include('admin.account.modal', ['data' => $account])


                                <a href="{{ route('admin::admin.account.show', ['account' => $account]) }}"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>نام سرویس</th>
                            <th>نام کاربری</th>
                            <th>تاریخ شروع سرویس</th>
                            <th>تاریخ پایان سرویس</th>
                            <th>تاریخ ایجاد</th>
                            <th>عملیات</th>
                        </tr>
                        </tfoot>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
@endsection

@section('js')









    <!-- DataTables -->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>



    <script>
        $(function () {
            $('#account-data').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>
@endsection