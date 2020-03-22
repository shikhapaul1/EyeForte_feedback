<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/styles/css/themes/lite-purple.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/styles/vendor/toastr.css')}}">
</head>

<style type="text/css">
    .card
    {
        background-color: #59BDAB;
         margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
    }
</style>
<body>
   
    <div class="auth-layout-wrap" style="background-image:  linear-gradient(to right, rgba(255,0,0,.4) 20%,
              rgba(255,0,0,.4)), url('img/11.jpg');">
        <div class="auth-content">
            


               @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif       
        <div class="row">  

            <div class="card col-md-6">
                        <div class="p-4">
                            <div class="auth-logo text-center mb-4">
                                <img src="{{asset('img/download.png')}}" alt="">
                            </div>
                            <h1 class="mb-3 text-18">Login</h1>
                            <form action="{{route('Login_submit')}}" method="post">@csrf
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input id="email" class="form-control form-control-rounded" name="email" type="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" class="form-control form-control-rounded" name="password" type="password">
                                </div>
                                <input type="submit" value="Login" class="btn btn-rounded btn-success btn-block mt-2"> 
                                <div class="mt-3 text-center">
                            </div>

                            </form>

                            
                        </div>
                   
                </div>
            </div>
</div>

        </div>
    </div>

    <script src="{{asset('assets/js/common-bundle-script.js')}}"></script>

    <script src="{{asset('assets/js/script.js')}}"></script>
         <script src="{{asset('assets/js/vendor/toastr.min.js')}}"></script>
    <script src="{{asset('assets/js/toastr.script.js')}}"></script>
</body>

</html>

<script>
    @if(Session::has('error'))
    {
    toastr.error("{{ Session::get('error') }}");

    }
      @endif
</script>
