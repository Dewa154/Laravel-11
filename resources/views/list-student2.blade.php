<div>
    <h1>Student2 List</h1>
    <form action="search-student2" method="get">
        <input type="text" name="search" value="{{@$search}}" placeholder="Search Name...">
        <button>Search</button>
    </form>

    <form action="delete-multi" method="post">
        @csrf
        <button>Delete</button>
        <table border="1">
            <tr>
                <th>Section</th>
                <td>Name</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Created</td>
                <td>Action</td>
            </tr>
            @foreach($student2s as $student2)
            <tr>
                <td><input type="checkbox" name="ids[]" value="{{$student2->id}}"></td>
                <td>{{ $student2->name }}</td>
                <td>{{ $student2->email }}</td>
                <td>{{ $student2->phone }}</td>
                <td>{{ $student2->created_at }}</td>
                <td>
                    <a href="{{'delete/'.$student2->id}}">Delete</a>
                    <a href="{{'edit/'.$student2->id}}">Edit</a>
                </td>
            </tr>
            @endforeach
            </tr>
        </table>
    </form>

    <br><br>
    {{$student2s->links()}}
</div>

<style>
    .w-5.h-5{
        width: 20px;
    }
</style>
