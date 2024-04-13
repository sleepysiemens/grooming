<div class="card">
    <div class="card-header">
        <div class="row">
            <h3 class="card-title col">{{__('Пользователи')}}</h3>
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
                            <th>{{__('Email')}}</th>
                            <th>{{__('Мастер')}}</th>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <button class="btn text-primary" wire:click="change_is_master({{$user->id}})">
                                        @if($user->is_master) <i class="fas fa-check"></i> @else <i class="fas fa-times"></i> @endif
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        {{$users->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>
