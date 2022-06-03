@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenido! ¿Qué deseas hacer?') }}
                    <br><br>
                    <ul>
                        <li><h5><a href="#">Ver negocio</a></h5></li>
                        <li><h5><a href="#">Editar negocio</a></h5></li>
                        <li><h5><a href="#">Ventas</a></h5></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
