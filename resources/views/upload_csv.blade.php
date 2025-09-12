<!DOCTYPE html>
<html>
<head>
    <title>Upload CSV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h3>Upload CSV to zoho_user Table</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('csv.upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="csv_file" class="form-label">Choose CSV File</label>
            <input type="file" class="form-control" name="csv_file" id="csv_file" accept=".csv" required>
        </div>
        <button type="submit" class="btn btn-success w-100">Upload</button>
    </form>



    <br>

    <br>
<title>Sync Jobs</title>

    <form action="{{ route('start.sync') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-primary">Start Sync</button>
</form>





</body>
</html>
