<section class="py-5 position-relative">
    <span class="position-absolute mb-5" id="products" style="bottom: 115%;"></span>
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                <div class=" px-lg-1">
                    <div class="row gx-5">
                        @foreach($products as $product)
                            <div class="col-lg-6 col-12 mb-lg-5 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <h3 class="font-alt text-start">{{$product->title}}</h3>
                                            <ul style="min-height: 200px">
                                                @foreach($product->includes as $include)
                                                    <li>
                                                        <p class="text-muted text-start mb-0" >{{$include}}</p>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block">
                <!-- Features section device mockup-->
                <div class="features-device-mockup">
                    <div class="device-wrapper m-0 position-relative d-flex" style="height: 600px;">
                        <div class="position-absolute h-100 d-flex">
                            <img class="w-100 h-100 m-auto rounded" style=" z-index: 2;-webkit-filter: drop-shadow(15px 5px 15px rgba(0,0,0,.05));filter: drop-shadow(5px 5px 5px #222); object-fit: cover" src="{{asset('img/sausage-dog.png')}}">
                        </div>
                        <div class="bg-primary rounded-circle shadow m-auto" style="width: 350px; height: 350px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
