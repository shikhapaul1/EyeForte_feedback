@extends('layouts.master')
@section('before-css')


@endsection

@section('main-content')
   <div class="breadcrumb">
                <h1>Send Message</h1>
                <ul>
                    <li>Send Messag</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title mb-3">Form Inputs</div>
                            <form method="post" action="{{route('Send_submit')}}">@csrf
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="firstName1">Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter your Name">
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="lastName1">Bill No</label>
                                        <input type="text" class="form-control" name="bill" placeholder="Enter your Bill No">
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter email">
                                        
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="phone">Phone</label>
                                        <input class="form-control" name="phone" placeholder="Enter phone">
                                    </div>

                                   


                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-success">
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



               

            </div>


@endsection

@section('page-js')



 <script src="{{asset('assets/js/vendor/toastr.min.js')}}"></script>
    <script src="{{asset('assets/js/toastr.script.js')}}"></script>
    <script>
    @if(Session::has('success'))
    
    toastr.success("{{ Session::get('success') }}");

    
      @endif
</script>
@endsection

