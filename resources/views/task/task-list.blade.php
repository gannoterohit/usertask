<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/xlsx@0.18.4/dist/xlsx.full.min.js"></script>


    <title>Task user list</title>
</head>

<body>

    <div class="container mt-3">
        <div class="bg-info">
        <button id="export-button" class="float-end btn btn-success mt-1 mx-1">Export Table Data</button>
            <a href="{{url('task')}}" class="btn btn-dark text-white float-end mt-1"> Add Task user</a>
            <h1 class="text-center mt-4"> Task User list</h1>
        </div>

        <table class="table table-dark" id="data-table">
            <thead>
                <tr class="table-dark">
                    <th class="table-dark">sno</th>
                    <th class="table-dark">Username</th>
                    <th class="table-dark">User Email</th>
                    <th class="table-dark">Task Detail</th>
                    <th class="table-dark">Task Status</th>
                    <th class="table-dark">Action</th>

                </tr>
            </thead>
            @php
            $sr=1;
            @endphp
            @foreach ($gettask as $data)
            <tbody>
                <tr class="table-active">
                    <td class="table-dark">{{$sr++}}</td>
                    <td class="table-dark">{{$data->getuser->name}}</td>
                    <td class="table-dark">{{$data->getuser->email}}</td>
                    <td class="table-dark">{{$data->task_detail}}</td>
                    <td class="table-dark">{{$data->task_type}}</td>
                    <td class="table-dark">
                        <a href="{{url('delete/'.$data->id)}}" class="btn btn-danger">delete</a>
                        <a href="{{url('edit-task/'.$data->id)}}" class="btn btn-info">Edit</a>
                    </td>
                </tr>

            </tbody>
          @endforeach
        </table>
        <div class="d-flex">
                {!! $gettask->links() !!}
            </div>
    </div>
    
    <script>
    const table = document.getElementById("data-table");
    const exportButton = document.getElementById("export-button");

    exportButton.addEventListener("click", function () {
        const tableData = [];
        const rows = table.querySelectorAll("tbody tr");

      
        
        const labels = Array.from(table.querySelectorAll("thead th")).map(th => th.textContent);
        tableData.push(labels);

        rows.forEach(row => {
            const rowData = [];
            const cells = row.querySelectorAll("td");

            cells.forEach(cell => {
                rowData.push(cell.textContent);
            });
            tableData.push(rowData);
        });

       
        
        const wb = XLSX.utils.book_new();
        const ws = XLSX.utils.aoa_to_sheet(tableData);

        XLSX.utils.book_append_sheet(wb, ws, "UserList");

        XLSX.writeFile(wb, "user_list.xlsx");
    });
</script>

    <!-- Optional JavaScript; choose one of the two! -->

   

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>