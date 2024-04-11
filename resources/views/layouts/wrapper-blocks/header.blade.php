<div class="container-fluid fixed-top shadow">
    <div class="container px-0 position-relative">
        <nav class="navbar navbar-light bg-white navbar-expand-xl">
            <a href="{{route('main.index')}}" class="navbar-brand"><h1 class="text-primary display-6"><i class="fas fa-paw me-2"></i>{{env('APP_NAME')}}</h1></a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{route('main.index')}}" class="nav-item nav-link">{{__('Главная')}}</a>
                    <a href="#about" class="nav-item nav-link">{{__('О нас')}}</a>
                    <a href="#products" class="nav-item nav-link">{{__('Услуги')}}</a>
                    <a href="#form" class="nav-item nav-link">{{__('Контакты')}}</a>
                </div>
                <div class="d-flex m-3 me-0">
                    <livewire:HeaderFormBtn/>
                </div>
            </div>
        </nav>


        @if (\Session::has('success'))
            <livewire:SuccessfulApplication lazy/>
        @endif

        @if (\Session::has('fail'))
            <livewire:FailedApplication lazy/>
        @endif

    </div>
</div>
