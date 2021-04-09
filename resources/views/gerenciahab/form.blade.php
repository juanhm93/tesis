@csrf
        <div class="form-group select_container">
            <div for="siglas" class="select_title font-weight-bold" >Siglas
            </div>
        <input type="text" class="form-control" id="siglas" name="siglas" aria-describedby="emailHelp" placeholder="Ingrese sigla de su habilitadora" value="{{ isset($gerencias) ? $gerencias->siglas : old('siglas') }}">
        <small id="emailHelp" class="form-text text-muted">(Ejemplo de siglas AMB)</small>
        {{$errors->first('siglas')}}
        </div>
        <div class="form-group select_container">
            <div for="gerenciashanilitadoras" class="select_title font-weight-bold" >Nombre
            </div>
        <input type="text" class="form-control" id="gerenciashabilitadoras" name="gerenciashabilitadoras" aria-describedby="emailHelp" placeholder="Ingrese nombre de la habilitadora" value="{{ isset($gerencias) ? $gerencias->gerenciahabilitadora : old('gerenciashabilitadoras') }}">
        <small id="emailHelp" class="form-text text-muted">(Ejemplo de habilitadora "Ambiente")</small>
        {{$errors->first('gerenciashabilitadoras')}}
        </div>
        <div class="form-group select_container">
            <input class="btn btn-danger" type="submit" value="{{ isset($btnText) ? $btnText : 'Guardar'}}" />
        </div>
