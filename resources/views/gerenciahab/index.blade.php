@extends('layouts.app')

@section('content')

<div class="col-md-12 mt-3 mb-5">
    <div class="card">
        <div class="card-header">Gerencias</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <!-- botones y lineas antes de la contenido principal -->
      
       <!-- fin botones y lineas antes de la contenido principal -->
       <div class="mb-3 text-right">
           <a href="{{route('gerenciashabilitadoras.create')}}" class="btn btn-sm btn-warning font-weight-bold">Crear +</a>
        </div>
        @if(session()->has('info'))
              <div class="alert alert-success">{{ session('info') }}</div>
        @endif

        @if($gerencias->count())

        <table class="table">
            <thead>
                <tr>
                    <th>Sigla</th>
                    <th>Gerencia</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                  @foreach ($gerencias as $gerencia)
                          <tr>
                          <td>{{$gerencia->siglas }}</td>
                          <td>{{$gerencia->gerenciahabilitadora }}</td>
                          <td>
                              <a href="{{route('gerenciashabilitadoras.edit',$gerencia->id)}}" class="btn btn-primary btn-sm">Editar</a>
                              <form style="display: inline" action="{{route('gerenciashabilitadoras.destroy',$gerencia->id)}}" method="POST">
                                  @csrf
                                  @method('delete')
                                  <button onclick="return confirm('¿Desea eliminar gerencia?')" class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                              </form>
                          </td>
                          </tr>
                  @endforeach
            </tbody>
        </table>
        @else
        <div class="alert alert-info">No Existe Gerencia habilitadora generada</div>
        @endif




      
        </div>
    </div>
</div>
    
@endsection