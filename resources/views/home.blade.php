@extends('adminlte::page')

@section('content_header')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @role('admin')
                    <p>Admin</p>
                    @endrole

                    @role('member')
                    <p>Member</p>
                    @endrole

                    {{ __('Selamat Datang Di Halaman ') }} {{auth::user()->name}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')

@endsection

@section('js')

@endsection
