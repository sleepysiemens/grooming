<td     @if($has_visit) class="bg-light position-relative has_visit" @endif>
    @if($has_visit)
        {{$visit->name}}
        <div class="position-absolute card bg-light visit-info border-white border" style="top: 0; left: 25%">
            <div class="card-body">
                <p>{{__('Клиент: ')}}{{$visit->client_name}}</p>
                <p>{{__('Телефон: ')}}{{$visit->phone}}</p>
                <p>{{__('Питомец: ')}}{{$visit->pet_name}}</p>
            </div>
        </div>
    @endif
</td>

