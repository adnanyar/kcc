<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <title>User Management</title>
    <style>
       
    </style>

</head>

<body>
    <table id="user_table" class="display">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Program</th>
                    <th>Update</th>
                    <th>Delete</th>
                    <th>View More</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> 1</td>
                    <td>adnan</td>
                    <td>Row@gmail.com</td>
                    <td>swen</td>
                    <td>swen</td>
                    <td><a href="">Update</a></td>
                    <td><a href="">Delete</a></td>
                    <td><a href="">View More</a></td>
                </tr>
                
            </tbody>
        </table>
<script>
$(document).ready( function () {
        $('#user_table').DataTable();
    } );

    $('#example').on('search.dt', function() {
    var value = $('.dataTables_filter input').val();
    console.log(value); // <-- the value
}); 
    </script>
       
</body>

</html>
