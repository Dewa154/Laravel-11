<!DOCTYPE html>
<html>
<head>
    <title>Upload File</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            padding: 10px;
            text-align: center;
        }
        h1 {
            text-align: center;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div>
        <h1>Upload File</h1>

        <form action="{{ url('showPdf') }}" method="post" enctype="multipart/form-data">
            @csrf 
            <table border="1">
                <tr>
                    <td>
                        <input type="file" id="file" name="file" required>
                    </td>
                    <td>
                        <button type="submit">Upload File</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>