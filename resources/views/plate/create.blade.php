@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <form action="{{Route('plate.store')}}" method="POST">
                @csrf
                <div class="card-header">
                    Plates
                </div>
                <div class="class-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name='name' class="form-control"/>
                            <label for="price">Price</label>
                            <input type="text" name="price" class="form-control"/>
                        </div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="Create" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection
