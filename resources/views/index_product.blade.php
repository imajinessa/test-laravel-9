@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{__('Product')}}</div>

                    <div class="card-group m-auto">
                        @foreach ($products as $product)
                            <div class="card m-3" style="widh: 18rem;">
                                    <img class="card-img-top" src="{{url('storage/' . $product->image)}}" alt="Card image cap" height="200">
                                <div class="card-body">  
                                    <p class="card-text">Name: {{$product->name}}</p>      
                                    <form action="{{route('show_product', $product)}}" method="get">
                                        <button type="submit">Show Detail</button>
                                    </form>
                                    @if (Auth::check() && Auth::user()->is_admin)
                                        <form action="{{route('delete_product', $product)}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit">Delete Product</button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
 @endsection