<!DOCTYPE html>
<html>
<head>
    <title>Uploaded PDF</title>
</head>
<body>
    <h1>Your Uploaded PDF</h1>
    <iframe src="{{ url('storage/'.$path) }}" style="width: 100%; height: 600px;" frameborder="0"></iframe>
</body>
</html>