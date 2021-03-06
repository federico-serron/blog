<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Posts search..." type="text" >
    </div>
    {{-- TABLE WITH ALL THE POSTS --}}
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->name }}</td>
                        <td width="10px"><a class="btn btn-primary btn-sm" href="{{ route('admin.posts.edit', $post) }}">Edit</a></td>
                        <td width="10px"><form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                                @csrf    
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{ $posts->links() }}
    </div>
</div>
