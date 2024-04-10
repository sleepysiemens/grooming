@extends('layouts.admin')

@section('content')
    <section class="content pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <livewire:ProductsList/>
                </div>
                <div class="col-12">
                <livewire:ApplicationsList/>
                </div>
            </div>
        </div>
    </section>
@endsection
