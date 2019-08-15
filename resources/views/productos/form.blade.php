{!! Form::open(['url' => $url,'method' => $method ]) !!}

    <div class="form-group">
        {{ Form::text('title',$producto->title  ,['class'=>'form-control','placeholder'=>'Título']) }}
    </div>
    <div class="form-group">
        {{ Form::number('pricing',$producto->pricing  ,['class'=>'form-control','placeholder'=>'Precio de tu producto']) }}
    </div>
    <div class="form-group">
        {{ Form::textarea('description',$producto->description  ,['class'=>'form-control','placeholder'=>'Descripbe tu producto']) }}
    </div>
    <div class="form-group">
        <a href="{{ url('productos') }}">Reagresar al listado de productos</a>
        <button class="btn btn-success" type="submit">Agregar</button>
    </div>

{!! Form::close() !!}