@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card producto" style="background-color: #66ffa6">
                
                @if(Auth::check() && $producto->user_id == Auth::user()->id) 
                    <div class="absolute actions">
                        <a href="{{ url('/productos/'.$producto->id.'/edit') }}"  >Editar</a>
                        @include('productos.delete',['producto',$producto])
                  
                    </div>
                @endif 
                   
                <h1 >{{ $producto->title }}</h1>
      
                <div class="row col-md-12">

                    <div class="col-md-6">
                         
                    </div>
                    <div class="col-md-6">
                        <p> <strong>Descripción</strong> </p>
                        <p> {{ $producto->description }} </p>
                        <p>
                           @include('in_shopping_carts.form',['producto'=>$producto])
                        </p>  
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection
