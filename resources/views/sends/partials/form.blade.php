<div class="form-group">
    {{Form::label('nombreDest', 'Nombre del Destinatario')}}
    {{Form::text('nombreDest',null,['class' => 'form-control'])}}
</div>
<div class="form-group">
    {{Form::label('peso', 'Peso (Sólo número en kilogramos)')}}
    {{Form::text('peso',null,['class' => 'form-control'])}}
</div>
<div class="form-group">
    {{Form::label('dimensiones', 'Dimensiones (Especificación en CM)')}}
    {{Form::text('dimensiones',null,['class' => 'form-control'])}}
</div>
<div class="form-group">
        {{Form::label('remitente', 'Lugar de Remitencia')}}
        {{Form::text('remitente',null,['class' => 'form-control'])}}
</div>
<div class="form-group">
        {{Form::label('destino', 'Lugar de Destino')}}
        {{Form::text('destino',null,['class' => 'form-control'])}}
</div>
<div class="row form-group col-md-12">
    {{Form::submit('Continuar al pago', ['class' => 'btn btn-primary col-md-6'])}}
    <input id="user_id" name="user_id" 
        type="text" class="form-control col-md-2" style="visibility: hidden;" value="{{$user}}">
</div>