<div>
    <h1>Upload File</h1>

    <form action="upload" method="post" enctype="multipart/form-data">
        @csrf 
        <table border="1">
            <tr>
                <td>
                    <input type="file" id="file" name="file" required>
                </td>
                <td>
                    <button>Upload File</button>
                </td>
            </tr
        </table>
    </form>
</div>
