@extends('layouts.admin')

@section('users') active @endsection

@section('content')
    <section class="content pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <livewire:UsersList/>
                </div>
            </div>
        </div>
    </section>
@endsection
