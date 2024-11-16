<div>
    <h1>Upload Image</h1>
    <form action="uploadedimage" method="post" enctype="multipart/form-data">
        @csrf 
        <table border="1">
            <tr>
                <td>
                    <input type="file" name="file" required>
                </td>
                <td>
                    <button>Upload File</button>
                </td>
            </tr
        </table>
    </form>
</div>
