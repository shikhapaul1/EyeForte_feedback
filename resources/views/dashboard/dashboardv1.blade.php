@extends('layouts.master')
@section('main-content')
<link rel="stylesheet" href="{{asset('assets/styles/vendor/toastr.css')}}">
<link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
           <div class="breadcrumb">
                <h1>Dashboard</h1>
                <ul>
                    
                </ul>
            </div>


            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                <!-- ICON BG -->
                <div class="col-lg-3 col-md-6 col-sm-6">    
                    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                        <div class="card-body text-center">
                            <i class="i-File-Chart"></i>
                            <div class="content">
                                <p class="text-muted mt-2 mb-0">Total Feedback</p>@php $totalfeedback=App\riview::select('name')->get();   @endphp
                                <p id="number" class="text-primary text-24 line-height-1 mb-2">{{count($totalfeedback)}}</p>
                            </div>
                        </div>
                    </div>
                </div>

                

            </div>

            <div  style="display: none;" id="table" class="row mb-4">
                <div class="col-md-12 mb-4">
                    <div class="card1 text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">Total Feedbacks</h4>
                            
                            <div class="table-responsive">
                                <table id="zero_configuration_table" class="display table table-striped table-bordered" style="width:100%">
                                 @include('datatables.table_content')
                                </table>

                            </div>

                        </div>
                    </div>
                </div>


@endsection

@section('page-js')
     <script src="{{asset('assets/js/vendor/echarts.min.js')}}"></script>
     <script src="{{asset('assets/js/es5/echart.options.min.js')}}"></script>
     <script src="{{asset('assets/js/es5/dashboard.v1.script.js')}}"></script>
             <script src="{{asset('assets/js/vendor/toastr.min.js')}}"></script>
    <script src="{{asset('assets/js/toastr.script.js')}}"></script>
     <script src="{{asset('assets/js/vendor/datatables.min.js')}}"></script>
    <script src="{{asset('assets/js/datatables.script.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.card').click(function(){
            $('#table').show(1000);
            

        });
    });
</script>

@endsection
