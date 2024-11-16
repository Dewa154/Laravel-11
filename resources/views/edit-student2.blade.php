<div>
    <h1>Update Student2 Data</h1>
    <form action="/update-student2/{{$data->id}}" method="post">
        @csrf 
        <input type="hidden" name="_method" value="put" >
        <table border="1">
            <tr>
                <td>
                    <label for="name">Name :</label>
                </td>
                <td>
                    <input type="text" name="name" value="{{$data->name}}" placeholder="Enter Your Name" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email :</label>
                </td>
                <td>
                    <input type="email" name="email" value="{{$data->email}}" placeholder="Enter Your Email Id" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="phone">Phone :</label>
                </td>
                <td>
                    <input type="phone" name="phone" value="{{$data->phone}}" placeholder="Enter Your Phone No." required>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <button type="submit" >Update</button>
                    <a href="/student2-list">Cancel</a>
                </td>
            </tr>
        </table>
    </form>
</div>