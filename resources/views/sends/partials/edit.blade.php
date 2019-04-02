<div class="form-group">
    {{Form::label('nombreDest', 'Nombre del Destinatario')}}
    {{Form::text('nombreDest',null,['class' => 'form-control', 'readonly' => 'readonly'])}}
</div>
<div class="form-group">
    {{Form::label('peso', 'Peso')}}
    {{Form::text('peso',null,['class' => 'form-control', 'readonly' => 'readonly'])}}
</div>
<div class="form-group">
    {{Form::label('dimensiones', 'Dimensiones')}}
    {{Form::text('dimensiones',null,['class' => 'form-control', 'readonly' => 'readonly'])}}
</div>
<div class="form-group">
        {{Form::label('remitente', 'Lugar de Remitencia')}}
        {{Form::text('remitente',null,['class' => 'form-control', 'readonly' => 'readonly'])}}
</div>
<div class="form-group">
        {{Form::label('destino', 'Lugar de Destino')}}
        {{Form::text('destino',null,['class' => 'form-control', 'readonly' => 'readonly'])}}
</div>
<div class="form-group">
    {{Form::label('costo', 'Costo')}}
    {{Form::text('costo',null,['class' => 'form-control', 'readonly' => 'readonly'])}}
</div>
<div class="row form-group col-md-6">
    {{Form::submit('Tomar Paquete', ['class' => 'btn btn-primary'])}}
    <input id="repartidor_id" name="repartidor_id" 
        type="text" class="form-control col-md-2" style="visibility: hidden;" value="{{$repartidor}}">
    <input id="estado" name="estado" 
        type="text" class="form-control col-md-2" style="visibility: hidden;" value="1">
</div>