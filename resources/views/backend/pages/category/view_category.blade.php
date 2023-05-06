@extends('backend.master')
@section("content")
<div class="container">
    <div>
        <p style="color:black;font-size:40px;margin:10px 5px 0px 10px">Catogory List</p>
    </div>
    <div class="container" style="margin-bottom:10px" ">
    <a href="" class="btn btn-success">Add Category</a>
    </div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Category Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($catdata as $key=>$category)

                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$category->category_name}}</td>
                    <td>{{$category->description}}</td>
                    <td>
                        <button class="btn btn-success" type="submit">
                            <a href="" >View <i class="fa-solid fa-eye"></i></a>
                        </button>
                        <button class="btn btn-success" type="submit">
                            <a href="">Edit<i class="fa-solid fa-pen-to-square"></i></a>
                        </button>
                        <button class="btn btn-success" type="submit">
                            <a href="" >Delete<i
                                class="fa-solid fa-trash-can"></i></a>
                        </button>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
          {{catdata->links()}}
    </div>
    </div>

@endsection
