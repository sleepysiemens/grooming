@extends('layouts.admin')

@section('products') active @endsection

@section('content')
    <section class="content pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <livewire:ProductsList/>
                </div>
                {{--
                <div class="col-12">
                    <livewire:ApplicationsList/>
                </div>
                <div class="col-12">
                    <livewire:ProductsList/>
                </div>
                --}}
            </div>
        </div>
    </section>
@endsection
