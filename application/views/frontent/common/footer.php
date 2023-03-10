<style>
    /* .futter{
        position : fixed;
        bottom : 0 ;
    } */
</style>
<!-- Footer -->
<footer class="futterdarkcolor bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4 socialicon">
        <!-- Facebook -->
        <a class="btn boostrapfacebook btn-outline-light btn-floating m-1" href="https://www.facebook.com/profile.php?id=100090620859878&mibextid=ZbWKwL" role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>
  
        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/RisingPoll" role="button"
          ><i class="fab fa-twitter"></i
        ></a>
  
        <!-- Google -->
        <!-- <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-google"></i
        ></a> -->
  
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://instagram.com/risingpoll?igshid=ZDdkNTZiNTM=" role="button"
          ><i class="fab fa-instagram"></i
        ></a>
  
        <!-- Linkedin -->
        <!-- <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a> -->

      </section>
      <!-- Section: Social media -->
  
      <!-- Section: Form -->
      <section class="">
        <form action="">
          <!--Grid row-->
          <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-auto">
              <p class="pt-2 margin0">
                <strong>Sign up for our newsletter</strong>
              </p>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-md-5 col-12">
              <!-- Email input -->
              <div class="form-outline emaildiv form-white mb-4">
                <input type="email" id="form5Example21" placeholder="Email Address" class="form-control" />
              </div>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-auto">
              <!-- Submit button -->
              <button type="submit" class="btn btn-outline-light mb-4">
                Subscribe
              </button>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </form>
      </section>
      <!-- Section: Form -->
  
      <!-- Section: Text -->
      <section class="mb-4">
        <p class="margin0">
        Gather opinions and insights with Rising Poll - the user-friendly platform for creating and participating in engaging polls. Join us today to start polling!
        </p>
      </section>
      <!-- Section: Text -->
  
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-6">
            <img class="roundedlogo" src="./assets/rising.png" alt="">
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-md-6">
            <!-- <h5 class="text-uppercase">Links</h5> -->
  
            <ul class="list-unstyled futternavi mb-0 d-inline text-left">
              <li>
                <a href="<?= base_url('privacy') ?>" class="text-white">Privacy Policy</a>
              </li>
              <li>
                <a href="<?= base_url('terms_condion') ?>" class="text-white">Terms & condition</a>
              </li>
              <li>
                <a href="<?= base_url('disclaimer') ?>" class="text-white">Disclaimer</a>
              </li>
              <li>
                <a href="<?= base_url('contact_us') ?>" class="text-white">Contact Us</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        <a class="text-white" href="https://risingpoll.com/">© <?= date("Y") ?> Risingpoll. All rights reserved.</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
<script>
var i=2;
function create_element(){
    $('#app_thing').clone().attr('id','opt'+i).appendTo('.append_option');
    $('#opt'+i+' input').attr({'placeholder':'Option '+(i+1)+''});
    $('#opt'+i+' .ans-option button:nth-child(1)').attr('onclick','remove_element("opt'+i+'")');
    i++;
}
function remove_element(id){
    $('#'+id+'').remove();
}
$('#upload_head').click(function(){
    document.getElementById("head_img").click();
})
$('#opt_upload_btn').click(function(){
    document.getElementById("opt_file").click();
})
</script>
<script>
        $('#selector').delay(400).fadeOut('slow');
    </script>
<?php if(isset($poll_data)): ?>
<script>
    $('#vote').click(function(){
        <?php if($poll_data['name'] == 'on'):?>
        var name = $('#name').val();
        if(name.length < 1 ){ $('#name').css("border-color" , '#dc3545').attr("placeholder" , "Please enter your name"); }else {
        <?php endif; ?>
            $('#msg').show().html('<div class="dot-pulse"></div>');
            var formData = new FormData();
            formData.append('option', $('input[name="option"]:checked').val());
            <?php if($poll_data['name'] == 'on'):?>
                formData.append('name', name);
            <?php endif; ?>
            
            fetch(`<?php echo base_url('manage/response/'.$poll_data['share_id']) ?>`, {
                method: "POST",
                body: formData,
            })
            .then(res => res.json() )
            .then(function (data) {
                $('#result').removeAttr('disabled');
                $("#msg").html(`${data.msg}`);
                $('#msg').delay(400).fadeOut('slow');
                localStorage.setItem("voted", "true");
            });
        <?php if($poll_data['name'] == 'on'):?> }   <?php endif; ?>
    })
</script>
<script>
    $('#result , #back').click(function(){
        $('.opt').slideToggle();
        $('.box-result').slideToggle();
    })
</script>
<script>
$('#result').click(function(){
    $('.append').html('<div class="dot-pulse my-5"></div>');
    fetch(`<?php echo base_url('manage/result/'.$poll_data['share_id']) ?>`)
        .then(res => res.json() )
        .then(function (data) {
            $(".append").html(`${data.msg}`);
    });
})
</script>

<?php endif; ?>
<script>
$(document).ready( function () {
    $('#example').DataTable({
        "bInfo" : false,
        "bLengthChange": false,
        
    });
} );
</script>
<script>
$('#s-toggle, .navbar-toggler').click(function(){
    $('.wc-m').toggle();
    $(".scroller").toggleClass("w-100");
    $(".scroller").toggleClass("col-md-12");
})
</script>

<!-- <script>
    if(localStorage.getItem("voed") != 'voted'){
      $('#result').attr({'disabled':'disabled'});
    }
</script> -->

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>