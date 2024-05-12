<div class="position-fixed w-100 h-100  @if($is_visible) d-flex @else d-none @endif" style="z-index: 10000; top: 0; background-color: rgba(0,0,0,.25)">
    <div class="container m-auto d-flex d-flex">
        <div class="row m-auto w-100 justify-content-center">
            <div class="col-10">
                <div class="card w-100">
                    <div class="card-body position-relative">
                        <button class="btn position-absolute border-4 border-primary m-0" wire:click="toggle_form" style="right: -1px; top: -1px"><i class="fas fa-times fa-2x"></i></button>
                        <h1 class="display-3 text-center">{{__('Оставьте заявку')}}</h1>
                        <p class="mb-4 text-primary text-center">
                            {{__('Выберите удобное время, а мы свяжемся с вами для подтверждения записи')}}
                        </p>

                        <form class="container" action="{{route('main.form.submit')}}" method="post">
                            @csrf
                            <input type="email" name="email" class="d-none">
                            <div class="row mb-4">
                                <div class="form-group col-6">
                                    <input type="text" class="form-control border-2 border-secondary w-100 py-3 px-4 rounded-pill" placeholder="Имя" name="name" required>
                                </div>

                                <div class="form-group col-6">
                                    <input type="tel" class="form-control border-2 border-secondary w-100 py-3 px-4 rounded-pill" placeholder="Телефон" name="phone" required>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="form-group col-6">
                                    <input type="text" class="form-control border-2 border-secondary w-100 py-3 px-4 rounded-pill" placeholder="Кличка питомца" name="pet_name" required>
                                </div>

                                <div class="form-group col-6 row justify-content-between">
                                    <div class="col-6">
                                        <input type="date" min="{{date("Y-m-d")}}" max="{{date("Y-m-d", strtotime('+ 7 days'))}}" class="form-control border-2 border-secondary w-100 py-3 px-4 rounded-pill" name="date" required>
                                    </div>
                                    <div class="col-6">
                                        <select class="form-control border-2 border-secondary w-100 py-3 px-4 rounded-pill" name="time">
                                            @php $time=strtotime('today 08:00') @endphp
                                            @for($i=0;$i<9;$i++)
                                                @php $time=strtotime('+ 60 minutes', $time) @endphp
                                                <option value="{{date('H:i', $time)}}">{{date('H:i', $time)}}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="form-group col-6">
                                    <select type="tel" class="form-control border-2 border-secondary w-100 py-3 px-4 rounded-pill" name="product" required>
                                        @foreach($products as $product)
                                            <option value="{{$product->title}}">{{$product->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="form-group col-6">
                                    <button class="btn btn-primary border-secondary rounded-pill w-100 py-3 px-4">
                                        {{__('Записаться')}}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
