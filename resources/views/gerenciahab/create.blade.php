@extends('layouts.app')

@section('content')

<div class="col-md-12 mt-3 mb-5">
    <div class="card">
        <div class="card-header">Crear Gerencias Habilitadoras</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

        @if(session()->has('info'))
              <div class="alert alert-success">{{ session('info') }}</div>
        @endif
        <form action= "/gerenciashabilitadoras" method="POST">
            @include('gerenciahab.form')
        </form>
        </div>
    </div>
</div>
    
@endsection