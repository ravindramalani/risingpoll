<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in to your account - RisingPoll.com</title>
  <meta name="twitter:card" content="summary_large_image" />
  <meta property="og:site_name" content="RisingPoll" />
  <meta property="og:title" content="Log in to your account - RisingPoll.com" />
  <meta property="og:description" content="Welcome buddy to RisingPoll! Enter your email address and password to login to your account." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?= base_url('login'); ?>" />
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
    .left-box-content {
      overflow: hidden !important;
    }

    .clo {
      color: white;

    }

    ::placeholder {
      font-size: 15px;
    }
  </style>
</head>

<body class="hold-transition login-page ">
  <div style="height:100% ;width:100%">
    <div class='cover'>
      <div class="left_cont dn ">
        <div class="left-box box-shdw dn">
          <div class="left-box-content">
            <p id="article_content"></p>
          </div>

          <div class="arrow-container animated fadeInDown">
            <div class="arrow-2  ">

              <i id="downClick" class="fa fa-angle-down "></i>
            </div>
          </div>

        </div>
      </div>
      <div class='rightSection'>
        <div class="right_cont">
          <div class="right-box">
            <div class="form-dir">
              <form action="<?php echo base_url('auth/check_login');?>" method="post" accept-charset="utf-8">
                <div class="form">
                  <div class="f1">
                  <p class="h4">Log in to your account</p>
                  <p class="h6">Or <a href="<?= base_url('signup') ?>">create an account</a></p>
                  </div>
                  <?php if($this->session->flashdata('error')) : ?>
                        <?php echo $this->session->flashdata('error'); ?>
                    <?php endif; ?>
                  <div class="form-group has-feedback">
                    <label>Email</label>
                    <input type="text" name="txtemail" class="form-control mb-1" placeholder="Email">
                    <?php if($this->session->flashdata('email')) : ?>
                        <?php echo $this->session->flashdata('email'); ?>
                    <?php endif; ?>
                  </div>
                  <div class="form-group has-feedback">
                    <label>Password</label>
                    <input type="password" name="txtpassword" class="form-control mb-1" placeholder="Password">
                    <?php if($this->session->flashdata('password')) : ?>
                        <?php echo $this->session->flashdata('password'); ?>
                    <?php endif; ?>
                  </div>
                  <div class="">
                    <button type="submit" class="btn mb-1 mt-1 btn-block btn-flat">Sign In</button>
                  </div>
                  <div class="mt-1 f4">
                    <p class="mt-2 text-muted" style="text-align: center;"><a hre="">Forgot Your Password?</a></p>
                  </div>
                  <input hidden type="text" id="scroll_value" value="1">
                  <div>
              </form>
            </div>
          </div>
        </div>
      </div>


      <script src="https://manage.eniacworld.com/assets/bower_components/jquery/dist/jquery.min.js"></script>

      <script src="https://manage.eniacworld.com/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

      <script src="https://manage.eniacworld.com/assets/plugins/iCheck/icheck.min.js"></script>
      <script>
        $(function () {
          $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
          });
        });
      </script>
      <script>
        $(document).on('click', '#downClick', function () {
          var val = ($("#scroll_value").val());
          if (val == 1) {
            $('.left-box-content').animate({ scrollTop: $(document).height() }, 1000);
            $("#scroll_value").val('0');
            // class="fa fa-angle-down "
            $('#downClick').attr('class', ' fa fa-angle-up clo');
            return false;
            exit;
          }
          if (val == 0) {
            $('.left-box-content').animate({ scrollTop: 0 }, 800);
            $("#scroll_value").val('1');
            $('#downClick').attr('class', ' fa fa-angle-down');
            return false;
          }
        });
      </script>
</body>

</html>