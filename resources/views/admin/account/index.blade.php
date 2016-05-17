@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">لیست اکانت‌ها</h3>
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
                            <td><a href="{{ route('admin::admin.account.edit', ['account' => $account]) }}"><i class="fa fa-pencil"></i> </a></td>
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