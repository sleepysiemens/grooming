<div>
    <p>{{__('Что входит в услугу:')}}</p>
    @php $i=0; @endphp
@foreach($product_includes as $include)
        @php $i++; @endphp

        <div class="form-group position-relative">
            <input type="text" class="form-control" name="include_title[{{$i}}]" required value="{{$include->title}}">
            <a wire:click="delete_include({{$include->id}})" class="position-absolute d-flex" style="right: 10px; top: 0; bottom: 0; cursor: pointer">
                <i class="far fa-trash-alt m-auto"></i>
            </a>
        </div>
@endforeach
    @php $i++; @endphp
    <div class="form-group">
        <input type="text" class="form-control" name="include_title[{{$i}}]" placeholder="{{__('Добавить еще')}}">
    </div>
</div>
