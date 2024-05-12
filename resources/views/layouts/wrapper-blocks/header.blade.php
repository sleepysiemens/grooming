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
                @if(auth()->user() != null)
                    <a class="ms-2" @if(auth()->user()->is_admin) href="{{route('admin.index')}}" @elseif(auth()->user()->is_master) href="{{route('master.index')}}" @endif>
                        <span class="d-flex">
                            <i class="fas fa-user-circle fa-2x mx-auto"></i>
                        </span>
                        <p class="m-0" style="font-size: 12px">Привет, {{auth()->user()->name}}</p>
                    </a>
                @else
                    <a class="ms-2" href="{{route('login')}}">
                        <i class="fas fa-sign-in-alt fa-2x"></i>
                    </a>
                @endif
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
