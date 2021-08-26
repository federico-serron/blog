@extends('adminlte::page')

@section('title', 'Dashboard | FedeBlog')

@section('content_header')
    <a class="btn btn-success float-right" href="{{ route('admin.tags.create') }}">+ New Tag</a>

    <h1>Tags</h1>
@stop

@section('content')

    @if (session('info'))
    <div class="alert alert-danger">
        <strong>{{ session('info') }}</strong>
    </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->name }}</td>
                            <td width="10px">
                                <a href="{{ route('admin.tags.edit', $tag) }}"><i class="far fa-edit"></i></a>
                            </td>
                            <td width="10px">
                                <form id="tags{{ $tag->id }}" action="{{ route('admin.tags.destroy', $tag) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a onclick="javascript:document.getElementById(`tags{{ $tag->id }}`).submit();
                                    return false;" href="{{ route('admin.tags.destroy', $tag) }}"><i class="far fa-trash-alt"></i></a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
