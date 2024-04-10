@extends('layouts.admin')

@section('content')
    <section class="content pt-5">
        <div class="row my-2 px-3">
            <a href="{{route('admin.index')}}" class="col">{{__('Назад')}}</a>

        </div>
        <div class="container-fluid">
            <div class="row">
                <form method="post" action="{{route('admin.products.store')}}" class="col-12">
                    @csrf
                    @method('put')
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{__('Добавить услугу')}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>{{__('Название')}}</label>
                                    <input type="text" class="form-control" placeholder="{{__('Название')}}" name="title" required>
                                </div>

                                <div class="form-group">
                                    <label>{{__('Описание')}}</label>
                                    <textarea class="form-control" placeholder="{{__('Название')}}" name="description" required></textarea>
                                </div>

                                <div class="form-group">
                                    <label>{{__('Название')}}</label>
                                    <input type="number" class="form-control" placeholder="{{__('Цена')}}" name="price" required>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">{{__('Добавить')}}</button>
                            </div>
                        </form>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
