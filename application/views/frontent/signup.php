<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up - Create a Free Account - RisingPoll.com</title>
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="og:site_name" content="RisingPoll" />
    <meta property="og:title" content="Sign Up - Create a Free Account - RisingPoll.com" />
    <meta property="og:description" content="Create a free account at RisingPoll to manage your polls." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?= base_url('signup'); ?>" />
    <!-- <meta property="og:image" content="" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" /> -->
    <meta property="og:locale" content="en" />
    <meta name="apple-mobile-web-app-title" content="RisingPoll" />
    <meta name="application-name" content="RisingPoll" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/login.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <style>
            /*
        *
        * ==========================================
        * CUSTOM UTIL CLASSES
        * ==========================================
        *
        */
        
        input[type=date], input[type=datetime-local], input[type=month], input[type=time] {
            -webkit-appearance: listbox;
            border: none;
            color: #1f5ab2;
            width: 7.3rem;
        }
        
        .left-box{
            padding:4rem;
        }
        .fa{
            color: #1f5ab2 !important;
        }
        .input-group-prepend {
            margin-right: 0px;
        }
        
        body {
            min-height: 100vh;
        }
        .form-control:not(select) {
            padding: 12px;
        }
        select.form-control {
            height: 52px;
            padding-left: 0.5rem;
        }
        .form-control {
            box-shadow:0px 0px 7px 0px rgb(0 0 0 / 20%);
            height: 40px !important;
        }
        
        .form-control::placeholder {
            font-size: 0.9rem;
        }
        a {
            color: #1f5ab2 !important;
        }
        .f1 {
            font-size: 2rem !important;
            margin-bottom: 3rem !important;
        }
        .custom-select {
          
            color: #6c757d !important;
        }
        .form{
            /* text-align-last: center; */
            max-width: 500px;
        }
        .custom-control-label{
            font-size: 0.8rem;
        }
        .custom-control-input:checked~.custom-control-label::before {
            color: #fff;
            border-color: #1f5ab2 !important;
            background-color: #1f5ab2 !important;
        }
        </style>
</head>

<body class="hold-transition login-page ">
    <div style="height:100%; width:100%">
        <div class="left_cont dn ">
            <div class="left-box box-shdw dn" style="overflow:hidden">
                <img src="https://manage.eniacworld.com/assets/dist/img/illustration.svg" alt=""
                    class="img-fluid mb-3 d-none d-md-block">
                <h1 class="text-center">Create an Account</h1>
                <p class="font-italic mb-0 text-center" style="color:#1f5ab2; font-weight: bold;">Register Your Self
                    With Us</p>
            </div>
        </div>

        <div class="right_cont" style="overflow: scroll; overflow-x: hidden;">
            <div class="right-box">
                <div class="form-dir mt-5">
                    <form action="<?php echo base_url('auth/register');?>" 
                        method="post" accept-charset="utf-8">
                        <div class="form">
                            <div class="f1">Create a free account</div>

                            <div class="input-group inputshdw mb-4">
                                <input type="text" name="txtname" placeholder="Full Name" class="form-control input-s1">
                                <?php echo form_error('txtname'); ?>
                            </div>
                            <?php if($this->session->flashdata('txtname')) : ?>
                            <?php echo $this->session->flashdata('txtname'); ?>
                            <?php endif; ?>
                            <div class="input-group inputshdw mb-4">
                                <input type="email" name="txtemail" placeholder="Email Address"
                                    class="form-control  input-s1">
                                    <?php echo form_error('txtemail'); ?>
                                </div>
                                <?php if($this->session->flashdata('txtemail')) : ?>
                                <?php echo $this->session->flashdata('txtemail'); ?>
                                <?php endif; ?>
                            <!-- <div class="input-group mb-4">
                                <div class="row">
                                    <div class="col-md-9">
                                        <input type="email" name="txtemail" placeholder="Verify Otp" class="form-control  input-s1">
                                    </div>
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-primary w-100">Otp</button>
                                    </div>
                                </div>
                            </div> -->
                            <div class="input-group inputshdw mb-4">
                                <input type="password" name="txtpassword" placeholder="Password"
                                    class="form-control  input-s1">
                                </div>
                                <?php if($this->session->flashdata('password')) : ?>
                                <?php echo $this->session->flashdata('password'); ?>
                                <?php endif; ?>
                            <!-- Default switch -->
                            <div class="px-2">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" name="accept" class="custom-control-input" id="customSwitches">
                                    <?php echo form_error('accept'); ?>
                                    <label class="custom-control-label" for="customSwitches">I agree to the <a href="<?= base_url('pages/privacypolicy') ?>"
                                        class="ml-1" >Privacy policy</a> and <a href="<?= base_url('pages/terms') ?>"
                                        class="ml-1" >Terms of service</a></label>
                                    <?php if($this->session->flashdata('accept')) : ?>
                                    <?php echo $this->session->flashdata('accept'); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group col-sm-12 mx-auto my-3" style=" background-color:#1f5ab2">
                                <button type="submit" class="btn btn-block py-2" style=" color:white " name="" id=""
                                    aria-describedby="helpId">Create your account</button>
                            </div>
                            <div class="text-center w-100 mt-3" style="border-top: outset;">
                                <p class="text-muted ">Already Registered? <a href="<?= base_url('login') ?>"
                                        class="ml-1" style="font-size: 1.3rem;text-decoration: underline;"> Login</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>