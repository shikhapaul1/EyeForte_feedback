<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/styles/css/themes/lite-purple.min.css')}}">
</head>

<body>

    <div class="auth-layout-wrap" style="background-image: url({{asset('assets/images/photo-wide-4.jpg')}})">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="auth-content">
            <div class="card o-hidden">
                <div class="row">
                    <div class="col-md-6">
                        <div class="p-4">
                            <div class="auth-logo text-center mb-4">

                                
                            </div>
                            <h1 class="mb-3 text-18">Registration</h1>

                            <form action="{{route('registration_submit')}}" method="post">@csrf
                                <div class="form-group">
                                    <label for="Name">Name</label>
                                    <input id="name" class="form-control form-control-rounded" type="text" name="name">
                                </div>
                                 <div class="form-group">
                                    <label for="Number">Phone Number</label>
                                    <input id="Number" class="form-control form-control-rounded" type="number" name="number">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input id="address" class="form-control form-control-rounded" type="text" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" class="form-control form-control-rounded" type="password" name="password" >
                                </div>
                                <button class="btn btn-rounded btn-success btn-block mt-2">Sign In</button>

                            </form>

                            <div class="mt-3 text-center">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-center " style="background-size: cover;background-image: url({{asset('assets/images/photo-long-3.jpg')}}">
                      
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('assets/js/common-bundle-script.js')}}"></script>

    <script src="{{asset('assets/js/script.js')}}"></script>
</body>

</html>
