
<!DOCTYPE html>
<html>
<head>
  <title>Feedback</title>
<link rel="stylesheet" href="{{asset('assets/styles/vendor/toastr.css')}}">
  <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
  <link href="{{asset('css/main.css')}}" rel="stylesheet" media="all">
   <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">




</head>

<style>
    .label
    {
        font-size: 1.1em;
        color: black;
        font-weight: bold;
        color: #17A589 ;
    }
    .lable:hover
    {
        color:red;

    }
    .radio-container
    {
        font-size: 12px;
        color: black;
    }

    .radio-container:hover
    {
        color: red;
       font-size: 1.2em;
       transition: 0.2s;
    }
    .center {
      display: block;
      margin-left: auto;
      margin-right: auto;
      margin-bottom: 25px;
    }
  
    
</style>

  
  

<div>
     @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: white;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>

<body style="background:url('{{asset('img/eye-forte.jpg')}}'); background-size: cover;">
<img class="center" src="{{asset('images/logo.png')}}">
    <div  class="page-wrapper bg-gra-02 p-t-150 p-b-150 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Feedback Form</h2>
                    <form  action="{{route('submit')}}" method="post" >@csrf
                        <div class="row row-space">
                            <div class="col-0">
                                <div class="input-group">
                                    <label class="label"> Name</label>
                                    <input class="input--style-4" type="text" name="name" required="" value="{{$name}}">
                                </div>
                            </div>
                            <div class="col-0">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="text" name="email" required="" value="{{$bill}}">
                                </div>
                            </div>
                             <div class="col-0">
                                <div class="input-group">
                                    <label class="label">Bill No.</label>
                                    <input class="input--style-4" type="text" name="bill" required="" value="{{$mobile}}">
                                </div>
                            </div>
                            <div class="col-0">
                                <div class="input-group">
                                    <label class="label">Phone</label>
                                    <input class="input--style-4" type="text" name="mobile" required="" value="{{$email}}">
                                </div>
                            </div>
                        </div>
                        <div class = "vertical"></div>
                        <p style="margin-bottom:  10px;">Please Fill Your Valueable Feedback:</p> <hr>
                        <div class="row row-space">
                            <div class="col-12">
                                <div class="input-group">
                                    <label class="label">1. How did you know about EYE FORTE EXCLUSIVE?</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Social Media
                                            <input type="radio" checked="checked" name="Social_Media"  id="social" value="Social Media">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container m-r-45">Advertisements
                                            <input type="radio" name="Social_Media" id="social" value="Advertisements">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container m-r-45">Persons Contact
                                            <input type="radio"  name="Social_Media" id="social" value="Persons Contact">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Others
                                            <input type="radio" name="Social_Media" id="social" value="Others">
                                            <span class="checkmark"></span>
                                        </label>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                         <div  class="row row-space">
                            <div class="col-12 mt-5">
                                <div class="input-group">
                                    <label class="label">2. Are you satisfied from EYE FORTE PRODUCTS?</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Very satisfied
                                            <input type="radio"  name="satisfied" value="Very satisfied">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container m-r-45">Satisfied 
                                            <input type="radio" name="satisfied" value="Satisfied">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container m-r-45">Good 
                                            <input type="radio"  name="satisfied" value="Good">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label  class="radio-container"> Not Good
                                            <input type="radio" name="satisfied" value=" Not Good">
                                            <span class="checkmark"></span>
                                        </label>

                                    </div>
                                </div>
                            </div>
                        </div><hr>
                         <div  class="row row-space">
                            <div class="col-12 mt-5">
                                <div class="input-group">
                                    <label class="label">3. Are you satisfied with our precise Eye Check-Up in EYE FORTE EXCLUSIVE?</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Very satisfied
                                            <input type="radio"  name="Very" value="Very satisfied">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container m-r-45">Satisfied 
                                            <input type="radio" name="Very" value="Satisfied">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container m-r-45">Good 
                                            <input type="radio"  name="Very" value="Good">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label  class="radio-container"> Not Good
                                            <input type="radio" name="Very" value=" Not Good">
                                            <span class="checkmark"></span>
                                        </label>

                                    </div>
                                </div>
                            </div>
                        </div><hr>
                         <div  class="row row-space">
                            <div class="col-12 mt-5">
                                <div class="input-group">
                                    <label class="label">4. Are you satisfied from our employee services?</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Very satisfied
                                            <input type="radio"  name="Good" value="Very satisfied">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container m-r-45">Satisfied 
                                            <input type="radio" name="Good" value="Satisfied">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container m-r-45">Good 
                                            <input type="radio"  name="Good" value="Good">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container"> Not Good
                                            <input type="radio" name="Good" value="Not Good">
                                            <span class="checkmark"></span>
                                        </label>

                                    </div>
                                </div>
                            </div>
                        </div><hr>
                         <div class="row row-space">
                            <div class="col-12 mt-5">
                                <div class="input-group">
                                    <label class="label">5. Did we meet your expectations?</label>
                                    <div class="p-t-10">
                                        <label id="radio" class="radio-container m-r-45">Yes
                                            <input type="radio"  name="Yes" value="Yes">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label id="radio" class="radio-container m-r-45">No 
                                            <input type="radio" name="Yes" value="No">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div><hr>
                        <div class="row row-space">
                            <div class="col-12 mt-5">
                                <div class="input-group">
                                    <label class="label">6. How likely are you to repeat your business with us?</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Every time
                                            <input type="radio"  name="Every" value="Every time">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container m-r-45">Twice  
                                            <input type="radio" name="Every" value="Twice">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container m-r-45">Once  
                                            <input type="radio"  name="Every" value="Once">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container"> Not at all 
                                            <input type="radio" name="Every" value="Not at all ">
                                            <span class="checkmark"></span>
                                        </label>

                                    </div>
                                </div>
                            </div>
                        </div><hr>
                        <div class="row row-space">
                            <div class="col-12 mt-5">
                                <div class="input-group">
                                    <label class="label">7. Was it easy to find what you were looking for?</label>
                                    <div class="p-t-10">
                                        <label id="radio" class="radio-container m-r-45">Yes
                                            <input type="radio"  name="No" value="Yes">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label id="radio" class="radio-container m-r-45">No  
                                            <input type="radio" name="No" value="No">
                                            <span class="checkmark"></span>
                                        </label>
                                        

                                    </div>
                                </div>
                            </div>
                        </div><hr>
                        <div class="row row-space">
                            <div class="col-12 mt-5">
                                <div class="input-group">
                                    <label class="label">8. Did we have the selection you were looking for?</label>
                                    <div class="p-t-10">
                                        <label id="radio" class="radio-container m-r-45">Yes
                                            <input type="radio"  name="selection" value="Yes">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label id="radio" class="radio-container m-r-45">No  
                                            <input type="radio" name="selection" value="No">
                                            <span class="checkmark"></span>
                                        </label>
                                        

                                    </div>
                                </div>
                            </div>
                        </div><hr>
                        <div class="row row-space">
                            <div class="col-12 mt-5">
                                <div class="input-group">
                                    <label class="label">9. Did you feel comfortable shopping with us?</label>
                                    <div class="p-t-10">
                                        <label id="radio" class="radio-container m-r-45">Yes
                                            <input type="radio"  name="shopping" value="Yes">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label id="radio" class="radio-container m-r-45">No  
                                            <input type="radio" name="shopping" value="No">
                                            <span class="checkmark"></span>
                                        </label>
                                        

                                    </div>
                                </div>
                            </div>
                        </div><hr>
                        <div  class="row row-space">
                            <div class="col-12 mt-5">
                                <div class="input-group">
                                    <label class="label">10. Were we able to satisfy your need?</label>
                                    <div class="p-t-10">
                                        <label id="radio" class="radio-container m-r-45">Yes
                                            <input type="radio"  name="satisfy" value="Yes">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label id="radio" class="radio-container m-r-45">No  
                                            <input type="radio" name="satisfy" value="No">
                                            <span class="checkmark"></span>
                                        </label>
                                        

                                    </div>
                                </div>
                            </div>
                        </div><hr>
                        <div class="row row-space">
                            <div class="col-12 mt-5">
                                <div class="input-group">
                                    <label class="label">11. Based on your experience, how likely are you to recommend EYE FORTE to your friends?</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Once 
                                            <input type="radio"  name="Once" value="Once">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container m-r-45">Twice   
                                            <input type="radio" name="Once" value="Twice">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container m-r-45">Every Time    
                                            <input type="radio" name="Once" value="Every Time">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div><hr>
                         <div  class="row row-space">
                            <div class="col-12 mt-5">
                                <div class="input-group">
                                    <label class="label">12. What do you like most about EYE FORTE EXCLUSIVE?</label>
                                    <div class="p-t-10">
                                        <label > 
                                            <textarea id="textarea" class="input--style-4" name="Comments" rows="3" cols="50"></textarea> 
                                        </label>
                                        
                                    </div>
                                </div>
                            </div>
                        </div><hr>
                          <div  class="row row-space">
                            <div class="col-12 mt-5">
                                <div class="input-group">
                                    <label class="label">13. Any suggestion or recommendations?</label>
                                    <div class="p-t-10">
                                        <label > 
                                            <textarea  id="textarea" class="input--style-4" name="Commentsssss" rows="3" cols="50"></textarea> 
                                        </label>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                     
                        <div class="p-t-15">
                            <input type="submit" id="toast-success" class="btn btn--radius-2 btn--green" value="Submit Your Review">
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>





<script>
    @if(Session::has('success'))
    
    toastr.success("{{ Session::get('success') }}");

    
      @endif
</script>


    <script src="{{asset('js/global.js')}}"></script>

 <script src="{{asset('assets/js/vendor/toastr.min.js')}}"></script>
    <script src="{{asset('assets/js/toastr.script.js')}}"></script>
</body>
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}" ></script>




















</html>
