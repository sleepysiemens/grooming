<div class="card">
    <div class="card-header">
        <div class="row">
            <h3 class="card-title col">{{__('Услуги')}}</h3>
            <a href="{{route('admin.products.create')}}" class="btn btn-primary">{{__('Добавить услугу')}}</a>
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
                            <th>{{__('Название')}}</th>
                            <th>{{__('Описание')}}</th>
                            <th>{{__('Цена')}}</th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->title}}</td>
                                <td><p style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;"
                                        {{$product->description}}
                                    </p>
                                </td>
                                <td>{{$product->price}}</td>
                                <td><a class="m-auto" href="{{route('admin.products.edit',$product->id)}}"><i class="far fa-edit"></i></a></td>
                                <td>
                                    <form method="post" action="{{route('admin.products.delete',$product->id)}}">
                                        @csrf
                                        @method('delete')
                                        <button class="btn text-primary"><i class="far fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>
