@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card producto" style="background-color: #66ffa6">
                  
                   
                <h1 >Tu carrito de compras</h1>
      
                <table class="table table-bordered">
                         <thead>
                             <tr> 
                                 <td class="text-center"> <strong> PRODUCTO </strong> </td>
                                 <td class="text-center"> <strong> PRECIO </strong> </td>  
                             </tr>
                         </thead>
                         <tbody>
                            @foreach($productos as $producto)
                                <tr> 
                                    <td>{{ $producto->title }}</td> 
                                    <td>{{ $producto->pricing }}</td> 
                                </tr>
                            @endforeach
                            <tr>
                            	<td class="text-center"> <strong>Total: </strong></td>
                            	<td class="text-center"> <strong>{{ $total }}</strong></td>
                            </tr>
                         </tbody>
                     </table>
            </div>
        </div>
    </div>
</div>
@endsection
