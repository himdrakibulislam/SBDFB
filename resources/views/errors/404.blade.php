<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Not Found</title>
     <!-- Favicons -->
     <link href="{{asset('assets/img/favicon-16x16.png')}}" rel="icon">
     <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
     
     <!-- Bootstrap -->
     <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

</head>
<style>
    .notFound{
    width: 500px;
    height: 100px;
    background-color: rgb(5, 103, 145);
    color: aliceblue;
    position: absolute;
    top:0;
    bottom: 0;
    left: 0;
    right: 0;
    
    margin: auto;
    }
    .code{
        font-size: 300px;
        font-weight: 100;
    }

</style>
<body class="notFound">
  
        <div class="text-center">
            <h1 class="code"> 404 </h1>
            <a  href="{{url('/')}}" class="btn btn-outline-dark text-white">Go Back To Home</a>
            <h3><b>Ooops!</b></h3>
            <p>Page Not Found</p>
          
        
        </div>

</body>
</html>