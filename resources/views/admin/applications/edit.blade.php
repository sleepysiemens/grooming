@extends('layouts.admin')

@section('content')
    <section class="content pt-5">
        <div class="row my-2 px-3">
            <a href="{{route('admin.applications.index')}}" class="col">{{__('Назад')}}</a>

        </div>
        <div class="container-fluid">
            <div class="row">
                <form method="post" action="{{route('admin.applications.update',$application->id)}}" class="col-12">
                    @csrf
                    @method('patch')
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{__('Подтвердить запись')}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>{{__('Имя')}}</label>
                                    <input type="text" class="form-control" placeholder="{{__('Название')}}" name="name" value="{{$application->name}}" required>
                                </div>

                                <div class="form-group">
                                    <label>{{__('Телефон')}}</label>
                                    <input type="tel" class="form-control" placeholder="{{__('Телефон')}}" name="phone" value="{{$application->phone}}" required>
                                </div>

                                <div class="form-group">
                                    <label>{{__('Кличка питомца')}}</label>
                                    <input type="text" class="form-control" placeholder="{{__('Название')}}" name="pet_name" value="{{$application->pet_name}}" required>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6 row justify-content-between">
                                        <div class="col-6">
                                            <label>{{__('Дата посещения')}}</label>
                                            <input type="date" class="form-control" placeholder="{{__('Дата посещения')}}" name="date" min="{{date("Y-m-d")}}" max="{{date("Y-m-d", strtotime('+ 7 days'))}}" value="{{$application->date_time}}" required>
                                        </div>
                                        <div class="col-6">
                                            <label>{{__('Время посещения')}}</label>
                                            <select class="form-control border-2 border-secondary" name="time">
                                                @php $time=strtotime('today 09:00') @endphp
                                                @for($i=0;$i<18;$i++)
                                                    @php $time=strtotime('+ 30 minutes', $time) @endphp
                                                    <option value="{{date('H:i', $time)}}">{{date('H:i', $time)}}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-6">
                                        <label>{{__('Мастер')}}</label>
                                        <select  class="form-control" name="master_id" required>
                                            @foreach($masters as $master)
                                                <option value="{{$master->id}}">{{$master->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">{{__('Сохранить')}}</button>
                            </div>
                        </form>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('scripts')

@endsection
