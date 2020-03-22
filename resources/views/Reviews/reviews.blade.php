@extends('layouts.master')
@section('page-css')

<link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
@endsection

@section('main-content')
  <div class="breadcrumb">
                <h1>Reviews</h1>
                <ul>
                </ul>
            </div>
            <div class="separator-breadcrumb border-top"></div>

            <div class="row mb-4">
                <div class="col-md-12">
                    
                </div>
            </div>
            <!-- end of row -->

            
                <!-- end of col -->

                <div class="col-md-12 mb-4">
                    <div class="card1 text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">Reviews</h4>

                            

                            <div class="table-responsive">
                                <table id="feature_disable_table" class="display table table-striped table-bordered" style="width:100%">
                                 @include('Reviews.reviews_table')
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end of col -->

                

            </div>
            <!-- end of row -->



@endsection

@section('page-js')

 <script src="{{asset('assets/js/vendor/datatables.min.js')}}"></script>
    <script src="{{asset('assets/js/datatables.script.js')}}"></script>

@endsection
