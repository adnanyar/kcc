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

    <title>Dashboard</title>
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
            height: 570px;
            display: none;

        }

        li {
            list-style: none;
            padding: 5px;

        }

        #welcome {
            float: right;
        }
    </style>

</head>

<body>
    <div class="container-fluid shadow p-3 mb-5 bg-white rounded">
        <div class="row">

            <div class="col-12  d-flex " style="height: 50px; background-color:rgb(244, 255, 251)">
                <div id="welcome" class="account " style="height: 50px;width:6%; ">
                    <a href="" style="font-family: fantasy; font-size:12px; text-decoration:none;">Adnan</a>
                    <p style="color:#d3c7c7">Welcome!</p>
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid shadow  rounded ">
        <div class="main">
            <div class="lef-bar " style="background-color:rgb(244, 255, 251); float:left;height:600px; width:20%;">

                <div id="flip">Menu</div>
                <ul id="panel">

                    <li>
                        <a href="#">Logout</a>
                    </li>
                    <li>
                        <a href="{{route('admin.adminprofile')}}">View Profile</a>
                    </li>

                    <li>
                        <a href="{{route('admin.adminusermanagement')}}">Uers Management</a>
                    </li>
                    <li>
                        <a href="{{route('admin.adminusermanagement')}}">Q&A Management</a>
                    </li>

                </ul>
            </div>
            <div class=" main-section shadow rounded" style="float: left;width:60%; height:600px;background-color:rgb(244, 255, 251);">
                <div class="container" style="margin-top:10px;">
                    <div class="row " style="height: 150px">
                        <div class="col-4 bg-danger"
                            style="background-image: url('https://cdn.pixabay.com/photo/2014/04/05/11/38/abstract-316429__340.jpg')">
                            <div class="p-1 ">
                                <div class="col-md-3">
                                    <h1 class="text-light" id="count2" class="display-4"></h1>
                                </div>
                                <h4 class=" text-light d-flex justify-content-center align-items-center">Number of
                                    Questions </h4>
                                <p class="text-light d-flex justify-content-center align-items-center">To MyKcc</p>
                            </div>
                        </div>
                        <div
                            class="col-4 bg-warning"style="background-image: url('https://cdn.pixabay.com/photo/2014/04/05/11/38/abstract-316429__340.jpg')">
                            <div class="p-1 ">
                                <div class="col-md-3">
                                    <h1 class="text-light" id="count1" class="display-4"></h1>
                                </div>
                                <h4 class="text-light d-flex justify-content-center align-items-center">Number of
                                    Answers </h4>
                                <p class="text-light d-flex justify-content-center align-items-center">To MyKcc</p>
                            </div>
                        </div>
                        <div class="col-4 bg-dark"
                            style="background-image: url('https://cdn.pixabay.com/photo/2014/04/05/11/38/abstract-316429__340.jpg')">
                            <div class="col-md-3">
                                <h1 class="text-light" id="count3" class="display-4"></h1>
                            </div>
                            <div class="p-1 ">
                                <h4 class=" text-light d-flex justify-content-center align-items-center">Monthly
                                    Visitors </h4>
                                <p class="text-light d-flex justify-content-center align-items-center">To MyKcc</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container" style="margin-top:10px;">
                    <div class="row " style="height: 100px">
                        <div class="col-4 bg-danger">
                            1
                        </div>
                        <div class="col-4 bg-warning">
                            2
                        </div>
                        <div class="col-4 bg-dark">
                            3
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-warning d-flex justify-content-center shadow  rounded"
                style="float: left;width:20%; height:600px; overflow:auto;">
                <div class="query-head shadow  rounded">
                    <p>Queries Panel</p>
                    <div class="queries-list">
                        <ul>
                            <li>
                                <a href="#">
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script>
        $(document).ready(function() {
            $("#flip").click(function() {
                $("#panel").slideToggle("slow");
            });
        });
    </script>
    <script src="{{ asset('js/numberchange.js') }}"></script>

</body>

</html>
