@extends('app') 
@section('title', 'All Categories') 
@section('content')
    @include('admin._navbar')
    @include('partials.margin')
<div class="container">
    <a href="{{route('categories.create')}}" class="btn btn-primary">
        <span class="glyphicon glyphicon-plus"></span> Create a New Category
    </a>
    <table id="contact-table" class="table table-bordered">
        <thead>
            <tr>
                <th>Category Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @if($categories->count()>0) @foreach ($categories as $category)
            <tr>
                <td>
                    {{$category->type}}
                </td>
                <td>
                    <a href="{{ route('categories.edit', [ 'id'=>$category->id]) }}" class='btn btn-info'>Edit
                    </a>
                </td>
                <td>
                    <form action="{{ route('categories.destroy', [ 'id'=>$category->id ]) }}" method="POST">
                        @method('DELETE') @csrf
                        <button type="submit" class='btn btn-danger'>Delete</a>
                    </form>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="7" class="text-center"> No Categories to show. Please add posts to see here. </td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection