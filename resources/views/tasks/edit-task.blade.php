<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 mt-5">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h2> Update Task : {{ $task->title }}</h2>

                    </div>
                    <div class="card-body">
                        <form action="{{ route('tasks.update',['task'=>$task->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="title" class="form-label">Title (*)</label>
                                <input type="text" name="title" value="{{ $task->title }}" class="form-control" id="title">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Details</label>
                                <textarea class="form-control" name="description" name="description" id="description"
                                    cols="30" rows="10">{{ $task->description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label"> Status</label>
                                <select name="status" class="form-select"" id=" status">
                                    <option selected>select status</option>
                                    <option value="open" {{ $task->status === 'open' ? 'selected':'' }}>Open</option>
                                    <option value="close"  {{ $task->status === 'close' ? 'selected':'' }}>Close</option>
                                </select>
                            </div>
                            {{-- <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div> --}}
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>










    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
