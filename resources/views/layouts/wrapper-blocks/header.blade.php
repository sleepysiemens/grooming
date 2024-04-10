<div class="container-fluid fixed-top">
    <div class="container topbar bg-primary d-none d-lg-block">
        <div class="d-flex justify-content-between">
            <div class="top-info ps-2">
                <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#" class="text-white">{{env('MAIL_FROM_ADDRESS')}}</a></small>
            </div>
            <div class="top-link pe-2">
                <a href="#" class="text-white"><small class="text-white mx-2">Privacy Policy</small>/</a>
                <a href="#" class="text-white"><small class="text-white mx-2">Terms of Use</small>/</a>
                <a href="#" class="text-white"><small class="text-white ms-2">Sales and Refunds</small></a>
            </div>
        </div>
    </div>
    <div class="container px-0 position-relative">
        <nav class="navbar navbar-light bg-white navbar-expand-xl">
            <a href="index.html" class="navbar-brand"><h1 class="text-primary display-6"><i class="fas fa-paw me-2"></i>{{env('APP_NAME')}}</h1></a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="#" class="nav-item nav-link">{{__('Главная')}}</a>
                    <a href="#products" class="nav-item nav-link">{{__('Услуги')}}</a>
                    <a href="#about" class="nav-item nav-link">{{__('О нас')}}</a>
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
