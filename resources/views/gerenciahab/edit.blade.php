@extends('layouts.app')

@section('content')

<div class="col-md-12 mt-3 mb-5">
    <div class="card">
        <div class="card-header">Modificar Gerencias Habilitadoras</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <!-- botones y lineas antes de la contenido principal -->
      
       <!-- fin botones y lineas antes de la contenido principal -->
       {{-- <div class="mb-3 text-right">
           <a href="{{route('gerenciashabilitadoras.create')}}" class="btn btn-sm btn-warning font-weight-bold">Crear +</a>
        </div> --}}
        @if(session()->has('info'))
              <div class="alert alert-success">{{ session('info') }}</div>
        @endif
        <form action="{{route('gerenciashabilitadoras.update',$gerencias->id)}}" method="POST" >
            @method('put')
            @include('gerenciahab.form',['btnText'=> 'Actualizar'])
        </form>
        </div>
    </div>
</div>
    
@endsection