
<h1>{{ $modo }} empleado</h1>

@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">  
        <ul>
            @foreach( $errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}" id="Nombre">
</div>

<div class="form-group">
    <label for="Nombre">Apellido Paterno</label>
    <input type="text" class="form-control" name="ApellidoPaterno"  value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno') }}" id="ApellidoPaterno">
</div>

<div class="form-group">
    <label for="Nombre">Apellido Materno</label>
    <input type="text" class="form-control" name="ApellidoMaterno"  value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno') }}" id="ApellidoMaterno">
</div>

<div class="form-group">
    <label for="Nombre">Correo</label>
    <input type="text" class="form-control" name="Correo"  value="{{ isset($empleado->Correo)?$empleado->Correo:old('Correo') }}" id="Correo">
</div>

<br>
<div class="form-group">
<input type="submit" value="{{ $modo }} datos" class="btn btn-success">

<a href="{{ url('empleado/') }}" class="btn btn-primary"> Regresar</a>
<br></div>