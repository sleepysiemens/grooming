<div class="container-fluid banner bg-light my-5 position-relative" >
    <span class="position-absolute mb-5" id="form" style="bottom: 100%;"></span>

    <div class="container py-5">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-10">
                <div class="row justify-content-end">
                    <div class="col-6">
                        <img src="{{asset('img/bulldog.png')}}" class="img-fluid w-100 rounded" alt="">
                    </div>
                </div>
                <div class="card bg-primary border-0 shadow position-relative">
                    <div class="card-body">
                        <h1 class="display-3 text-white text-center">{{__('Оставьте заявку')}}</h1>
                        <p class="mb-4 text-dark text-center">
                            {{__('Выберите удобное время, а мы свяжемся с вами для подтверждения записи')}}
                        </p>
                        <form class="container" action="{{route('main.form.submit')}}" method="post">
                            @csrf
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

                                <div class="form-group col-6">
                                    <input type="datetime-local" class="form-control border-2 border-secondary w-100 py-3 px-4 rounded-pill" name="date_time" required>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="form-group col-6">
                                    <button class="btn btn-light border-secondary rounded-pill w-100 py-3 px-4">
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
