@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center" style="background-color: #00e676">Productos</div>

                <div class="card-body " style="background-color:#66ffa6">
                     <table class="table table-bordered">
                         <thead>
                             <tr>
                                 <td>ID</td>
                                 <td>Título</td>
                                 <td>Descripción</td>
                                 <td>Precio</td> 
                                 <td>Acciones</td>
                             </tr>
                         </thead>
                         <tbody>
                            @foreach($productos as $producto)
                                <tr>
                                    <td>{{ $producto->id }}</td>
                                    <td>{{ $producto->title }}</td>
                                    <td>{{ $producto->description }}</td>
                                    <td>{{ $producto->pricing }}</td>
                                    <td>
                                        <a href="{{ url('/productos/'.$producto->id.'/edit') }}" class="btn btn-info">Editar</a>
                                        @include('productos.delete',['producto',$producto])
                                    </td>
                                </tr>
                            @endforeach
                         </tbody>
                     </table>
                </div>
                <div class="flouting">
                    <a href="/productos/create" class="btn btn-primary"  > Agregar Producto 
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
