<!DOCTYPE html>
<html>

<head>
    <title>User Registration</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">

        <div class="bg-dark">


            <h1 class="text-center text-white">User Task update</h1>
        </div>
        <form method="POST" action="{{url('task-upadate')}}">
            @csrf

            <input type="hidden" name="id" value="{{ $task->id }}">

            <!-- This is important for Laravel to protect against Cross-Site Request Forgery (CSRF) -->

            <div class="form-group">
                <label for="name">Name</label>
                <!-- <input type="text" class="form-control" id="name" name="name" required> -->
                <select class="form-select" name="username" id="username" style="width:100%;" required>
                    <option value=""></option>

                    @foreach($user as $value)
                    <option value="{{$value->id}}" {{ $value->id == $task->username ? 'selected' : '' }}>
                        {{ $value->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mt-3">
                <label for="email">Task Details</label>
                <textarea type="text" class="form-control" id="task_detail" name="task_detail"
                    required>{{$task->task_detail}}</textarea>
            </div>

            <div class="form-group mt-3">
                <label for="type">Task Type</label>
                <select class="form-select " name="task_type" id="task_type" style="width:100%;" value="" required>

                    <option value="">Select type</option>
                    <option value="Pending" {{ "Pending" == $task->task_type ? 'selected' : '' }}>Pending</option>
                    <option value="Done" {{ "Done" == $task->task_type ? 'selected' : '' }}>Done</option>

                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3">update</button>

        </form>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>