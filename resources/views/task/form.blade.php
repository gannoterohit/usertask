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
        <a href="{{url('get-task')}}" class="btn btn-primary float-end mt-1">task user list</a>

            <h1 class="text-center text-white">User Task Details</h1>
        </div>
        <form method="POST" action="{{url('add-task')}}">
            @csrf

          
            <!-- This is important for Laravel to protect against Cross-Site Request Forgery (CSRF) -->
            
            <div class="form-group">
                <label for="name">Name</label>
                <!-- <input type="text" class="form-control" id="name" name="name" required> -->
                <select class="form-select" name="username" id="username" style="width:100%;" required>
                    <option value="">Select User</option>
                    @foreach($model as $value)
                    <option value="{{$value->id}}">{{ $value->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mt-3">
                <label for="email">Task Details</label>
                <textarea type="text" class="form-control" id="task_detail" name="task_detail" required></textarea>
            </div>

            <div class="form-group mt-3">
                <label for="type">Task Type</label>
                <select class="form-select " name="task_type" id="task_type" style="width:100%;" required>

                    <option value="">Select type</option>
                    <option value="Pending">Pending </option>

                    <option value="Done">Done </option>

                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Register</button>

        </form>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>