<div class="card">
    <div class="card-header">
        <div class="row">
            <h3 class="card-title col">{{__('Расписание')}}</h3>
            <a href="{{route('admin.products.create')}}" class="btn btn-primary">{{__('Добавить запись')}}</a>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
                <div class="col-sm-12 col-md-6"></div>
                <div class="col-sm-12 col-md-6"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                        <thead>
                        <tr>
                            <th></th>
                        @for($i=0; $i<=6; $i++)
                                <th>{{date("m.d", strtotime('today +'.$i.' days'))}}</th>
                        @endfor
                        </tr>
                        </thead>
                        <tbody>
                        @php $time=strtotime('today 9:00') @endphp

                        @for($i=1;$i<=18;$i++)

                            <tr>
                                <td>{{date("H:i",$time)}}</td>
                                @for($j=0; $j<=6; $j++)
                                    @php $time=strtotime('today +'.$j.' days '.date("H:i:s",$time)) @endphp
                                    <livewire:Visit time="{{date('Y-m-d H:i:s',$time)}}" />
                                @endfor
                            </tr>

                            @php $time=strtotime('+ 30 min', $time) @endphp
                        @endfor
                        </tbody>
                    </table>
                    <div class="row">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>
