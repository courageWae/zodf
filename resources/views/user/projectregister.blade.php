@extends('user.layouts.app')

@section('title', 'Apply For Programme')

@section('page', 'register')

@section('main')


    <!-- Teachers Area section -->
    <section class="register-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">

                    <form action="{{ route('postregister') }}" class="learnpro-register-form" method="POST">
                        <p class="lead">Application Form</p>
                        @csrf
                        
                            <input type="hidden" name="project_id" value="{{ $projects->id }}">
                            <input type="hidden" name="status" value="pending">
            
                        <div class="form-group">
                            <label for="">First Name *</label>
                            <input value="{{ session()->get('student.firstname') }}" name="firstname" class="form-control" placeholder="First Name *" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Sur Name *</label>
                            <input value="{{ session()->get('student.surname') }}" name="surname" class="form-control" placeholder="Sur Name *" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Other Names</label>
                            <input value="{{ session()->get('student.othername') }}" name="othername" class="form-control" placeholder="Other Names *" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">E-mail *</label>
                            <input value="{{ session()->get('student.email') }}" class="required form-control" name="email" placeholder="Email *" type="email">
                        </div>
                        <div class="form-group">
                            <label for="">Active Phone Number *</label>
                            <input class="required form-control" value="{{ session()->get('student.phone') }}" name="phone" placeholder="Phone *" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Age *</label>
                            <input class="required form-control" value="{{ session()->get('student.age') }}" name="age" placeholder="Age *" type="number">
                        </div>
                        <div class="form-group">
                            <label for="">Gender *</label>
                            <select class="required form-control" name="gender" id="">
                                <option disabled>-- Select --</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Region *</label>
                            <select class="required form-control" name="region" id="region">
                                <option disabled>-- Select --</option>
                                <option value="Greater Accra">Greater Accra Region</option>
                                <option value="Ashanti Region">Ashanti Region</option>
                                <option value="Western Region">Western Region</option>
                                <option value="Northern Region">Northern Region</option>
                                <option value="Volta Region">Volta Region</option>
                                <option value="Eastern Region">Eastern Region</option>
                                <option value="Upper West Region">Upper West Region</option>
                                <option value="Central Region">Central Region</option>
                                <option value="Upper East Region">Upper East Region</option>
                                <option value="Savannah Region">Savannah Region</option>
                                <option value="North East Region">North East Region</option>
                                <option value="Bono East Region">Bono East Region</option>
                                <option value="Oti Region">Oti Region</option>
                                <option value="Ahafo Region">Ahafo Region</option>
                                <option value="Bono Region">Bono Region</option>
                                <option value="Western North Region">Western North Region</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Religion</label>
                            <select class="required form-control" name="religion" id="">
                                <option disabled>-- Select --</option>
                                <option value="Muslim">Muslim</option>
                                <option value="Christian">Christian</option>
                                <option value="Traditionalist">Traditionalist</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Zongo Community *</label>
                            <input class="required form-control" value="{{ session()->get('student.zongo') }}" name="zongo" placeholder="Zongo Community" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">District *</label>
                            <input class="required form-control" value="{{ session()->get('student.district') }}" name="district" placeholder="District" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Residential address</label>
                            <input class="required form-control" value="{{ session()->get('student.address') }}" name="address" placeholder="Residential address" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Nationality</label>
                            <input class="required form-control" value="{{ session()->get('student.country') }}" name="country" placeholder="Nationality" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Do you have a disability?</label>
                            <select class="required form-control" name="disability" id="">
                                <option disabled>-- Select --</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Educational Level *</label>
                            <select class="required form-control" name="education" id="">
                                <option disabled>-- Select --</option>
                                <option value="BECE">BECE</option>
                                <option value="WASSCE">WASSCE</option>
                                <option value="Higher National Diploma (HND)">Higher National Diploma (HND)</option>
                                <option value="Bachelor's Degree">Bachelor's Degree</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Employment Status *</label>
                            <select class="required form-control" name="employment" id="">
                                <option disabled>-- Select --</option>
                                <option value="Self Emploed">Self Employed</option>
                                <option value="Employed">Employed</option>
                                <option value="Unemployed">Unemployed</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Do you know how to use MS Word?</label>
                            <select class="required form-control" name="word" id="">
                                <option disabled>-- Select --</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Do you know how to use MS Excel?</label>
                            <select class="required form-control" name="excel" id="">
                                <option disabled>-- Select --</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Vocational area of interest?</label>

                             <!-- Northern Belt Training options -->
                            <select class="form-control" name="interest" id="training" style="display:none;" required>
                                <option disabled>--Select--</option>
                                <option value="Beads Making">Beads Making</option>
                                <option value="Leather Works">Leather Works</option>
                                <option value="Soap Making">Soap Making</option>
                                <option value="Batik Making">Batik Making</option>
                                <option value="Coconut Oil Making">Coconut Oil Making</option>   
                            </select> 
                            <!-- Northern Belt Training options -->
                            <select class="form-control" name="interest" id="training_1" style="display:none;" required>
                                <option disabled>--Select--</option>
                                <option value="Beads Making">Beads Making</option>
                                <option value="Sandal Making">Sandal Making</option>
                                <option value="Soap Making">Soap Making</option>
                                <option value="Events Decoration">Events Decoration</option>
                                <option value="Makeup Artistry">Makeup Artistry</option>       
                            </select>


                        </div>
                        <div class="form-group">
                            <label for="">Have you received any training in the above vocational area selected?</label>
                            <select class="required form-control" name="trained" id="">
                                <option disabled>-- Select --</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Kindly specify any other vocational area of interest that was not included in the options provided.</label>
                            <textarea class="required form-control" name="othervocation" id="" cols="30" rows="10">{{ session()->get('student.othervocation') }}</textarea>
                        </div>
                        <div class="form-group register-btn">
                            <button type="submit" class="btn btn-primary btn-lg">Apply</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ End Teachers Area section -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    
$(document).ready(function(){
  $("#region").change(function(){
      if($("#region").val() == "Greater Accra Region"|| $("#region").val() == "Volta Region"||$("#region").val() =="Western Region"||$("#region").val() =="Western North Region"||$("#region").val() =="Central Region"||$("#region").val() =="Eastern Region"||$("#region").val() =="Bono Region"||$("#region").val() =="Ahafo Region"||$("#region").val() =="Ashanti Region"||"Bono East Region"||$("#region").val() =="Oti Region"){
          $("#training").show();
          $("#training_1").hide();
      }
      if($("#region").val()=="Northern Region"|| $("#region").val()=="Savannah Region"||$("#region").val() =="Upper East Region"||$("#region").val() =="North East Region"||$("#region").val() =="Upper West Region"){
        
          $("#training_1").show();
          $("#training").hide();
         }
  });
});
/*
function showValues(){
    if(document.getElementById("training").style.display == "block"){
    var result = document.getElementById("training").value;
    return result;
  }
  else {
    var result = document.getElementById("training_1").value;
    return result;
  }
  }
  */
</script>


    <!-- Footer Area section -->
    @endsection