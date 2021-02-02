@extends('FrontEnd.components.content')

@section('headSection')
<!-- daterange picker -->
<link rel="stylesheet" href="{{url('plugins/daterangepicker/daterangepicker.css')}}">

@endsection

@section('contentSection')
<div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/2.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <h2 class="title mt-70">Artist Registration</h2>
            </div>
        </div>
    </div>
</div>
<div class="breadcumb--con">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Artist Registartion</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Main content -->
<section class="content m-2">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <!-- left column -->
            <div class="col-md-12">

                <div class="card card-primary card-outline card-outline-tabs">

                    <div class="card-body m-80">
                        <div class="tab-content">

                            <div class="tab-pane active" id="register-artist">


                                <section class="content-header  justify-center">
                                    <h1>
                                        <small class="ml-80">Register Artists</small>
                                    </h1>
                                </section>

                                <form role="form" method="post" class="form-horizontal form-group" action="{{ url('User/addArtist') }}" enctype="multipart/form-data" id="addArtistForm">
                                    {{ csrf_field() }}
                                    <div class="card-body ml-80">

                                        <div class="row">
                                            <h4>Basic Information</h4>
                                        </div><br>

                                        <div class="form-group row">
                                            <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name" autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="phone" class="col-sm-2 col-form-label">Phone Number</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-sm-2 col-form-label">Email Address</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email Address">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="location" class="col-sm-2 col-form-label">Location</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="location" name="location" placeholder="Enter Location Address">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <h5> Bank Account Information</h5>
                                        </div><br>


                                        <div class="form-group row">
                                            <label for="bankName" class="col-sm-2 col-form-label">Bank Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="bank_name" name="bank_name" placeholder="Enter The Bank Name">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="bankAccount" class="col-sm-2 col-form-label">Bank Account</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="account_number" name="account_number" placeholder="Enter Account Number">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="accountName" class="col-sm-2 col-form-label">Bank Account Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="account_name" name="account_name" placeholder="Enter Bank Account's Name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h5>Upload Content</h5>
                                        </div><br>
                                        <div class="form-group row">
                                            <label for="idImage" class="col-sm-2 col-form-label"> <span class="fa fa-upload"> </span> Add Id Image </label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control-file" id="id_image" name="id_image">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="profileImage" class="col-sm-2 col-form-label"><span class="fa fa-upload"> </span> Add Profile Image</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control-file" id="profile_image" name="profile_image">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="d-flex justify-content-center">
                                        <input type="submit" class="btn btn-primary mr-3" value="Submit" />
                                        <button type="reset" class="btn btn-warning text-white">Clear</button>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                    <!-- /.card -->
                </div>


            </div>
        </div>
    </div>
</section>
<section class="poca-newsletter-area bg-img bg-overlay pt-50 jarallax" style="background-image: url(img/bg-img/15.jpg);">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-12 col-lg-6">
                <div class="newsletter-content mb-50">
                    <h2>Sign Up To Newsletter</h2>
                    <h6>Subscribe to receive info on our latest news and episodes</h6>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="newsletter-form mb-50">
                    <form action="#" method="post">
                        <input type="email" name="nl-email" class="form-control" placeholder="Your Email">
                        <button type="submit" class="btn">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scriptSection')
<script src="{{ url('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script src="{{ url('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- jquery-validation -->
<script src="{{ url('plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ url('plugins/jquery-validation/additional-methods.min.js') }}"></script>


<script type="text/javascript">
    $('#addArtistForm').validate({
        rules: {
            first_name: {
                required: true,
                maxlength: 15,

            },
            last_name: {
                required: true,
                maxlength: 15,

            },
            phone: {
                required: true,
                minlength: 9,
                maxlength: 10,
                digits: true,
            },
            bank_name: {
                required: true,
                minlength: 2,
                maxlength: 20,

            },
            account_name: {
                required: true,
                minlength: 2,
                maxlength: 20,

            },
            account_number: {
                required: true,
                minlength: 1,
                maxlength: 20,
                digits: true,
            },
            email: {
                email: true
            },
            id_image: {
                require: true,
                extension: "jpg,jpeg,png",

            },
            profile_image: {
                extension: "jpg,jpeg,png",

            }
        },
        messages: {
            first_name: {
                required: "Please enter first name",

            },
            last_name: {
                required: "Please enter last name",

            },
            phone: {
                required: "Please enter phone number",
                minlength: "Your Phone must be at least 9 characters long",
                maxLength: "Your Phone must be at maximum 15 characters long"
            },

            bank_name: {
                required: "Please enter bank name",

            },
            account_name: {
                required: "Please enter Your registered account name",

            },
            account_number: {
                required: "Please enter account number",

            },
            id_image: {
                required: "Please provide an image of your Id",

            },
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            error.addClass('offset-sm-2');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }

    });
</script>
@endsection