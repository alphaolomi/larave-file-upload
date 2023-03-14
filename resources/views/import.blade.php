<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Import</h1>
        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @if ($errors->any())

                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <input type="file" name="file" id="file">
            <button type="submit">Import</button>
        </form>
    </main>
</body>
</html>
