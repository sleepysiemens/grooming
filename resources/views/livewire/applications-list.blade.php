<div class="card">
    <div class="card-header">
        <div class="row">
            <h3 class="card-title col">{{__('Заявки')}}</h3>
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
                            <th>#</th>
                            <th>{{__('Имя')}}</th>
                            <th>{{__('Телефон')}}</th>
                            <th>{{__('Дата и время')}}</th>
                            <th>{{__('Подтверждено')}}</th>
                        </thead>
                        <tbody>
                        @foreach($applications as $application)
                            <tr>
                                <td>{{$application->id}}</td>
                                <td>{{$application->name}}</td>
                                <td>{{$application->phone}}</td>
                                <td>{{$application->date_time}}</td>
                                <td>
                                    <button wire:click="change_approval({{$application->id}})" class="btn text-primary">
                                        @if($application->is_approved) <i class="fas fa-check"></i> @else <i class="fas fa-times"></i> @endif
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        {{$applications->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>
