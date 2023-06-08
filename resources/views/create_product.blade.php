@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{__('Create Product')}}</div>

                        <div class="card-body">
                            <form action="{{ route('store_product') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" placeholder="Name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="description" placeholder="Description" class="form-control">
                                </div>
                                <div>
                                    <label>Price</label>
                                    <input type="number" name="price" placeholder="Price" class="form-control" class="form-control">
                                </div>
                                <div>
                                    <label>Stocl</label>
                                    <input type="number" name="stock" placeholder="Stock" class="form-control" class="form-control">
                                </div>
                                <div>
                                    <label>Stocl</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary mt-3">Submit Data</button>
                                        <a href="{{route('index_product')}}" class="btn btn-primary mt-3">Back to index</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection