@extends('admin.layouts.app')


@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">لیست فایل‌ها</h3> &nbsp;&nbsp;&nbsp; <span style="font-size: 0.8em;">[ <a href="{{ route('admin::admin.recording.create') }}">آپلود</a> ]</span>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="account-data" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>نام فایل</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $no = 0 ?>

                        @foreach($recordings as $recording)
                        <tr>
                            <?php $no++ ?>
                            <td>{{ $no }}</td>
                            <td>{{ $recording }}</td>
                            <td>
                                @include('admin.partials.delete', ['data' => $recording, 'name' => 'recording'])
                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>نام فایل</th>
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