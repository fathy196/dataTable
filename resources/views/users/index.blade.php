<!DOCTYPE html>
<html>

<head>
    <title>User Directory</title>
    <!-- Add jQuery JavaScript -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- DataTables JavaScript & CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css">
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>



    <!-- Our Users table initialization code -->
    <script>
        $(document).ready(function() {
            $('#usersTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('users.index') }}',
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'position',
                        name: 'position'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                ],
                responsive: true
            });
        });
    </script>
</head>

<body>
    <div class="container">
        <h1 class="mt-4">User Directory</h1>
        <table id="usersTable" class="table table-striped nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>email</th>
                </tr>
            </thead>
        </table>
    </div>
</body>

</html>
