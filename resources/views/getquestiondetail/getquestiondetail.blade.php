@extends('layouts.bsstartup')
@section('title')
    Question_Detail
@endsection
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
{{-- CKEditor CDN --}}
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

@section('content')
    {{-- <div class="bg-danger">
    {{dd($qdetail)}} 
    <h1>Welcome</h1> 
    </div> --}}
    <style>

    </style>

    <div class="conatiner-fluid ">
        <div class="row" style="margin: 0px; padding:0px;">
            <div class="col-8 ">
                <div class="row">
                    <div class="col-12  " style="height: 400px;">

                        <div class="card " style="height: 350px; padding:0px;box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)">
                            <div class="card-header ">
                                <h4>Question Title</h4>
                            </div>
                            <div class="card-body " style="height: 300px; padding-top:0px;">
                                <div class="row ">
                                    <div class="col-12 " style=" padding:0px; margin:0px">
                                        <div class="overflow-auto"
                                            style="height: 200px; widht:100%; border:2px solid white; background-color:whitesmoke;">
                                            {!! $qdetail->q_description !!}
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 bg-warning ">

            </div>

        </div>

        <div class="row m-auto">
            <div class="col-8 " style="background-color: whitesmoke;">
                <form action="{{ route('user.createanswer') }}" method="POST">
                    @csrf
                    <input type="hidden" name="qid" id="qid" value="{{ $qdetail->id }}">
                    <div class="form-group shadow " style="height:160px; overflow:auto;background-color: whitesmoke;">
                        <label for="body"> Submit Your Answer Here! </label>
                   
                            
                       
                        <textarea class="form-control " id="description"  placeholder="Enter The Answer"  name="description" 
                            style="background-color: whitesmoke;"></textarea>
                          
                    </div>
                    <button class="btn btn-dark" type="submit">Submit</button>
                </form>
            </div>
            <div class="col-4 bg-warning">2</div>
        </div>
    </div>
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
    </div>
    </div>
    </div>
@endsection
