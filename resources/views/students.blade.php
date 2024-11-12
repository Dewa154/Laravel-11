<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    <h1>Students List</h1>

    <style>
        table {
            border-collapse: collapse; /* This makes the borders collapse into a single border */
        }
        td {
            padding: 10px; /* Adjust the padding value as needed */
        }
    </style>


    <table border="2">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Batch</td>
        </tr>
        @foreach($data as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->batch }}</td>
        </tr>
        @endforeach
    </table>
</div>
