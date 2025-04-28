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

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <title>Admin Profile</title>
    <style>
        #panel,
        #flip {
            padding: 5px;
            text-align: center;
            background-color: #e5eecc;
            border: solid 1px #c3c3c3;
        }

        #panel {
            padding: 5px;
            height: 150px;
            display: none;

        }

        li {
            list-style: none;
        }
    </style>

</head>

<body>
    <div class="lef-bar " style="background-color:rgb(244, 255, 251); float:left;height:600px; width:20%;">

        <div id="flip">Menu</div>
        <ul id="panel">




            <li>
                <a href="#">Update</a>
            </li>
            <li>
                <a href="#">delete</a>
            </li>
        </ul>
    </div>
    <div class="container-fluid shadow rounded">
        <div class="row">
            <div class="col-12 bg-white">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Delete</th>
                        

                        </tr>

                    </thead>
                    <tbody>
                       
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td><a href="">Delete</a></td>
                        </tr>
                        <tr>
                           <th> <input type="text" name="name" id="" placeholder="name"></th>
                          <th>  <input type="email" name="email" id="" placeholder="email"></th>
                            <th><input type="number" name="password" id="" placeholder="password"></th>
                            <th><input type="number" name="" id="confirm password" placeholder="confirm password"></th>
                            <th scope="col"><a href="#">Update</a></th>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

</body>

</html>
