@extends('adminlte::page')

@section('title', 'Categories | FedeBlog')

@section('content_header')
    <h1>Categories</h1>
@stop

@section('content')
            @if (session('info'))
            <div class="alert alert-success">
                <strong>{{ session('info') }}</strong>
            </div>
            @endif
        

        <div class="card">
            <div class="card-header">
                <a class="btn btn-primary btn-sm" href="{{ route('admin.categories.create') }}">+ Add Category</a>
            </div>

            <div class="card-body">
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th class="col-span-2"></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td width="10px" ><a href="{{ route('admin.categories.edit', $category) }}"><i class="far fa-edit"></i></a></td>
                                    <td width="10px" >
                                        <form id="destroy{{ $category->id }}" action="{{ route('admin.categories.destroy', $category) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <a onclick="javascript:document.getElementById(`destroy{{ $category->id }}`).submit();
                                            return false;" href="{{ route('admin.categories.destroy', $category) }}"><i class="far fa-trash-alt"></i></a>
                                        </form>
                                    </td>
                                </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@stop