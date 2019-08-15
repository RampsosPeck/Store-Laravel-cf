@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">EDITAR PRODUCTO</div>

                <div class="card-body">
                    
                @include('productos.form',['producto'=>$producto,'url'=>'/productos/'.$producto->id,'method'=>'PATCH'])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
