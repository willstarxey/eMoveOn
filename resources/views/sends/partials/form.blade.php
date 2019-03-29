<div class="form-group">
    {{Form::label('nombreDest', 'Nombre del Destinatario')}}
    {{Form::text('nombreDest',null,['class' => 'form-control'])}}
    {{Form::label('peso', 'Peso')}}
    {{Form::text('peso',null,['class' => 'form-control'])}}
    {{Form::label('dimensiones', 'Dimensiones')}}
    {{Form::text('dimensiones',null,['class' => 'form-control'])}}
    {{Form::label('costo', 'Costo')}}
</div>
<div class="form-group">
    {{Form::submit('Continuar al pago', ['class' => 'btn btn-primary'])}}
</div>