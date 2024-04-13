@extends('layouts.admin')

@section('main') active @endsection

@section('content')
    <section class="content pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <livewire:Timetable/>
                </div>
            </div>
        </div>
    </section>
@endsection
