<!doctype html>
<html lang="en">

<head>
    <title> Laravel 9 Install CKEditor Example </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- CKEditor CDN --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
</head>

<body>
    <div class="container-fluid   " style=" background-color: rgba(85, 219, 85, 0.664);height:1000px;">
        <div class=" container alert bg-info alert-dismissible fade show" role="alert"
            style="height: 70px;border-radius: 15px;">
            <strong>Holy guacamole!</strong>
            ly random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years
            old. Richard McClintock, a Latinly random text. It has roots in a piece of classical Latin literature from
            45 BC, making it over 2000 years old. Richard McClintock, a Latin
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="row ">
            <div class="col-xl-12 text-right">
                <a href="{{ url('posts') }}" class="btn btn-success"> Back </a>
            </div>
        </div>
        @if (@isset($data))
            <div>
                {!! $data !!}
            </div>
        @endif


        <form action="{{ route('storeask') }}" method="POST">
            @csrf

            <div class="row">
                <div class="container">


                    <div class="card shadow bg-danger" style="border-radius: 15px;">
                        <div class="card-header">
                            <h5 class="card-title">Selected Category/<span>{{$category}}</span> </h5>
                        </div>
                        <div class=" container">
                            <div class="form-group">
                                <label> Title </label>
                                <input type="text" class="form-control" name="title" placeholder="Enter the Title" >
                            </div>
                            {{-- overflow is here --}}
                            <div class="form-group overflow-auto" style="height: 150px">
                                <label for="body"> Description </label>
                                <textarea class="form-control " id="description" placeholder="Enter the Description" name="description" ></textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success"> Save </button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    </form>
    </div>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
