{!! Form::open(['url'=>'/productos/'.$producto->id, 'method'=>'DELETE','class'=>'inline-block']) !!}

	<input type="submit" class="btn btn-link no-padding no-margin  delete-btn no-transform" style="color: red" value="Eliminar">

{!! Form::close() !!}