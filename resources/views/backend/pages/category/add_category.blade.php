@extends('backend.master')
@section('content')


<div class="container" style="margin: 20px 50px 0px 50px;color:black">
    <div >
        <p style="font-size: 30px;color:black">Add New Category</p>
    </div>
    <form action="{{route('store_category')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" style="font-size: 20px; margin-bottom:10px;font:bold">Category Name</label>
            <input type="text" class="form-control" id="name" placeholder="" name="name">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}
                    </div>
                @enderror
        </div>
        <div class="mb-3">
            <p style="font-size: 20px; margin-bottom:10px; border:2px font:bolder">Description</p>
            <textarea id="description" name="description" rows="5" cols="50">
            </textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>

    </form>
</div>

@endsection
