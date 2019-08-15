@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" >
                <div class="card-header" style="background-color: #00e676">NUEVO PRODUCTO</div>

                <div class="card-body" style="background-color: #66ffa6">
                    
                @include('productos.form',['producto'=>$producto,'url'=>'/productos','method'=>'POST'])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
