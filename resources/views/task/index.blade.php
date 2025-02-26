<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Daftar Tugas</h1>
        <hr>
        <div class="row">
            @foreach($tasks as $task)
            <div class="col-12 col-md-4">
                <div class="card mt-2">
                    <div class="card-body">
                        <h4 class="card-title">
                            {{ $task['name'] }}
                        </h4>
                        <small>Deadline : {{ \Carbon\Carbon::parse($task['deadline'])->format('d F Y') }}</small><br>
                        <span class="badge bg-warning">{{ $task['status'] }}n</span>
                        <p class="card-text">{{ Str::limit($task['description'], 40, '...')}}</p>
                        <div class="mt-2">
                            <a href="{{ route('tasks.show', $task['id']) }}" class="btn btn-warning">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
