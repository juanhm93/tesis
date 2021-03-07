@extends('layouts.app')

@section('content')

<div class="col-md-9">
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
      @if(session()->has('info'))
            <div class="alert alert-success">{{ session('info') }}</div>
      @endif
      
      <table class="table">
          <thead>
              <tr>
                  <th>Numero</th>
                  <th>Gerencias</th>
                  <th>Accion</th>
              </tr>
          </thead>
          <tbody>
                @foreach ($status as $stt)
                        <tr>
                        <td>{{$stt->operability }}</td>
                        <td>
                            <a href="{{route('estados.edit',$stt->id)}}">Editar</a>
                            <form style="display: inline" action="{{route('estados.destroy',$stt->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </form>
                        </td>
                        </tr>
                @endforeach
          </tbody>
      </table>




      
        </div>
    </div>
</div>
    
@endsection