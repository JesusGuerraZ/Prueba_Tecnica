<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('titulo') }}
            {{ Form::text('titulo', $libro->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
            {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('autor') }}
            {{ Form::text('autor', $libro->autor, ['class' => 'form-control' . ($errors->has('autor') ? ' is-invalid' : ''), 'placeholder' => 'Autor']) }}
            {!! $errors->first('autor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('num_paginas') }}
            {{ Form::number('num_paginas', $libro->num_paginas, ['class' => 'form-control' . ($errors->has('num_paginas') ? ' is-invalid' : ''), 'placeholder' => 'Num Paginas']) }}
            {!! $errors->first('num_paginas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('calificacion') }}
            {{ Form::number('calificacion', $libro->calificacion, ['class' => 'form-control' . ($errors->has('calificacion') ? ' is-invalid' : ''), 'placeholder' => 'Calificacion', 'max' => 10]) }}
            {!! $errors->first('calificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div><br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
        <input type="button" onclick="history.back()" name="volver" value="Cancelar" class="btn btn-danger">
    </div>
</div>
