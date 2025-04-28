<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to dashboard</title>
</head>

<body>
    <div id="app">
        <div id="about">
            <App :questions="{{$questions}}"></App>
            {{-- <App/> --}}
          
        </div>
     
    </div>
    @vite('resources/js/app.js')
</body>

</html>
<script>
    window.questions = @json($questions);
</script>