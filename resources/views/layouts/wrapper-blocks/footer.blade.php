<div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
    <div class="container py-5">
        <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
            <div class="row g-4">
                <div class="col-lg-3">
                    <a href="#">
                        <h1 class="text-primary mb-0"><i class="fas fa-paw me-1"></i> {{env('APP_NAME')}}</h1>
                        <p class="text-secondary mb-0">{{__('Роскошный уход и стильный облик')}}</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="text-light mb-3">{{__('Почему мы?')}}</h4>
                    <p class="mb-4">
                        {{__('Мы используем современное оборудование, которое позволяет бережно, комфортно и быстро провести все процедуры')}}
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex flex-column text-start footer-item">
                    <h4 class="text-light mb-3">{{__('Информация')}}</h4>
                    <a class="btn-link" href="#">{{__('Главная')}}</a>
                    <a class="btn-link" href="#products">{{__('Услуги')}}</a>
                    <a class="btn-link" href="#about">{{__('О нас')}}</a>
                    <a class="btn-link" href="#form">{{__('Контакты')}}</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="text-light mb-3">{{__('Контакты')}}</h4>
                    <p>Почта: {{env('MAIL_FROM_ADDRESS')}}</p>
                    <p>Телефон: {{env('CONTACT_PHONE')}}</p>
                    <p>Адрес: {{env('LOCATION_ADDRESS')}}</p>
                    <p>Мы открыты: {{env('WE_ARE_OPEN')}}</p>
                    <div class="row">
                        <a class="col-auto" href="">
                            <i class="fab fa-vk fa-2x"></i>
                        </a>
                        <a class="col-auto" href="">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                        <a class="col-auto" href="">
                            <i class="fab fa-tiktok fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
