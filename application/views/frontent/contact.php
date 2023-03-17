<style>
        .modal {
      display: block; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
    }

    /* The Close Button */
    .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }
h1{
    font-size:2rem;
    color: #1F5AB2;
    text-align: center;
    margin:20px 0;
}
@media (min-width:767px) {
    .w-75{
        width: 60%!important;
    }
}

@media (max-width:767px) {
    .w-75{
        width: 95%!important;
    }
}
</style>



<section class="mt-4 mb-3">
    <div class="border w-75 m-auto p-3 "> 
        <h1>Contact us</h1>   
        <?php if($this->session->flashdata('contact_field_message')):?>
                <div class="text-center">
                    <p class="text-danger"><?= $this->session->flashdata('contact_field_message'); ?></p>
                </div>
        <?php endif; ?>
        <form class="row g-3" method="post" action="<?= base_url('manage/contact_support'); ?>">
            <div class="col-12 my-2">
                <!-- <label for="name" class="form-label">Name</label> -->
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            </div>
            <div class="col-12 my-2">
                <!-- <label for="email" class="form-label">E-mail</label> -->
                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
            </div>
            <div class="col-12 my-2">
                <!-- <label for="subject" class="form-label">Subject</label> -->
                <input type="text" class="form-control" id="subject" name="subject" placeholder="write your subject">
            </div>
            <div class="col-12 my-2">
                <!-- <label for="complaint" class="form-label">Complaint</label> -->
                <textarea class="form-control" id="Textarea1" name="message" rows="3" placeholder="write your complaint"></textarea>
            </div>
            <div class="col-1  mx-auto">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</section>
<?php if($this->session->flashdata('contact_msg')):?>
      <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content text-center">
          <p><?= $this->session->flashdata('contact_msg') ?></p>
          <a class="close_btn btn btn-primary m-auto w-25">Close</a>
        </div>

        </div>
        <script>
          var span = document.getElementsByClassName("close_btn")[0];
          var modal = document.getElementById("myModal");
          span.onclick = function() {
          modal.style.display = "none";
        }
        </script>
    <?php endif; ?>