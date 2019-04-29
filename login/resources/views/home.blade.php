@extends('layouts.app')

@section('content')
<div class="container" style="background:pink">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tablero</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Estás conectado!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
