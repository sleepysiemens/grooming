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
                                    <div class="form-group col-6">
                                        <label>{{__('Дата посещения')}}</label>
                                        <input type="datetime-local" class="form-control" placeholder="{{__('Дата посещения')}}" name="date_time" value="{{$application->date_time}}" required>
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
