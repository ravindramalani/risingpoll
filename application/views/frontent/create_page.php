
    <div>
        <div class="srvdiv">

            <h1 class="crthdng text-center">Start creating your poll <span> today </span> ?</h1>

            <form method="post" enctype='multipart/form-data' action="<?php echo base_url('manage/create_page_submit'); ?>" class="form px-4 py-4">
                <?php if($this->session->flashdata('msg')):?>
                <div class="text-center">
                    <p class="text-danger"><?= $this->session->flashdata('msg'); ?></p>
                </div>
                <?php endif; ?>

                <label class="title">Title</label>
                <div class="tdiv">
                    <input type="text" name="title" placeholder="Type your question here..." class="form-control shadow-none">
                    <input onchange="resizeImage(event)" id="head_img" class="d-none" type="file" name="head_img">
                    <input id="hiddeninput" type="hidden" name="image_resize">
                    <button id="upload_head" type="button" class="absolute imgicon">
                        <i class="fa fa-image"></i>
                    </button>
                </div>
                <div class="preview text-center py-2">
                    
                </div>
                <div class="chosediv">
                    <div class="py-3 append_option">
                        <label class="title">Answer Options</label>
                        <div class="tdiv">
                            <input type="text" name="option[]" placeholder="Option 1" class="form-control shadow-none">
                            <!-- <input class="d-none" type="file" name="img[]"> -->
                            <!-- <button id="opt_upload_btn" class="absolute imgicon">
                                <i class="fa-solid fa-images"></i>
                            </button> -->
                        </div>
                        <div id="app_thing" class="tdiv my-2">
                            <input type="text" name="option[]" placeholder="Option 2" class="form-control shadow-none">
                            <div class="absolute my-auto ans-option">
                                <!-- <button class="imgicon">
                                    <i class="fa-solid fa-images"></i>
                                </button> -->
                                <button type="button" class="imgicon">
                                    <i class="fa fa-close"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                        <div class="phtdiv">
                            <button  type="button" onclick="create_element()" class="addphto px-3 py-1">
                                <i class="fa fa-plus"></i> Add Option
                            </button>
                        </div>

                    <a class="text-dark font-weight-bold" data-toggle="collapse" href="#collapseExample"
                        aria-expanded="false" aria-controls="collapseExample">
                        <i class="fa fa-angle-down"></i> Show Advance Options
                    </a>
                    <div class="collapse px-4" id="collapseExample">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" name="m_private" class="custom-control-input" id="log19">
                            <label class="custom-control-label" for="log19">Make it private
                            </label>
                        </div>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" checked name="one_vote_ip" class="custom-control-input" id="log15">
                            <label class="custom-control-label" for="log15">One vote per IP address
                            </label>
                        </div>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="log11">
                            <label class="custom-control-label" for="log11">Set end date
                            </label>
                        </div>
                        <div id="end_date" class="form-group px-3 my-2 date_end">
                            <input type="text "placeholder="Select a date" onfocus="$(this).hide().next().attr('hidden',false).focus();"/>
                            <input type="datetime-local" name="end_date" hidden="true">
                        </div>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" checked name="one_vote_session" class="custom-control-input" id="log12">
                            <label class="custom-control-label" for="log12">One vote per browser session
                            </label>
                        </div>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" name="h_result"  class="custom-control-input" id="customSwitches1">
                            <label class="custom-control-label" for="customSwitches1">Hide Results
                            </label>
                        </div>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" name="u_name"  class="custom-control-input" id="customSwitches3">
                            <label class="custom-control-label" for="customSwitches3">Ask Name
                            </label>
                        </div>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitches0">
                            <label class="custom-control-label"  for="customSwitches0">Custom Share Message
                            </label>
                        </div>
                        <div class="custom-share px-3 " id="customs_share">
                            <div class="form-group">
                                <label class="text-danger" for="">Note : Use {title} for Title in sharing and {link} for link</label>
                                <textarea class="form-control"  name="cust_msg" id="" rows="2" placeholder="ex : { title }  {link} ">{title}  {link}</textarea>
                            </div>
                        </div>  
                    </div>
                    <div class="crtol text-center py-3"> 
                        <button class="btn btn-primary px-5 py-2">
                            Create Poll
                        </button> 
                    </div>
            </form>

        </div>
    </div>
    <div class="container mt-3 py-2">
        <div class="rel d-flex">
            <button class="rounded-0 border-0 btn btn-primary arrow text-white w-25 px-2 h4 my-2">
              Top Polls
            </button>
            <div class="arrow-right my-2"></div>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                    <?php foreach($top_poll as $value){$date1 =  strtotime($value['date']);$date2 =  strtotime(date("Y-m-d"));$interval = $date2 - $date1; $result = json_decode($value['poll'])?>
                    <div class="col-md-4">
                    <a href="<?php echo base_url('poll/'.$value['share_id']) ?>#create">
                        <div class="card p-3 mb-2">
                            <img height="183px" class="card-img-top" src="<?php if(isset($result->head_img)){ echo base_url('assets/image_poll/'.$result->head_img); }else{  echo base_url('assets/').'image_share.png'; }?>" alt="<?= $result->title?>">
                            <h3 class="h5 my-2 heading"><?= $result->title?></h3>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="ms-2 c-details">
                                        <span class="mr-2"><?= round($interval / (60 * 60 * 24)) ?> days ago</span> <span class="text-secondary"><i class="fa fa-eye" aria-hidden="true"></i> <?= $value['view'] ?> Views</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <?php }?>
                </div>
              </div>
              
            </div>
            <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a> -->
          </div>
    </div>
    <div class="container py-2 mb-5">
        <div class="rel d-flex">
            <button class="rounded-0 border-0 btn btn-primary arrow text-white w-25 px-2 h4 my-2">
              Recent Polls
            </button>
            <div class="arrow-right my-2"></div>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                <?php foreach($recent_poll as $value){ $date1 =  strtotime($value['date']);$date2 =  strtotime(date("Y-m-d"));$interval = $date2 - $date1;$result = json_decode($value['poll'])?>
                    <div class="col-md-4">
                    <a href="<?php echo base_url('poll/'.$value['share_id']) ?>#create">
                        <div class="card p-3 mb-2">
                            <img height="183px" class="card-img-top" src="<?php if(isset($result->head_img)){ echo base_url('assets/image_poll/'.$result->head_img); }else{  echo base_url('assets/').'image_share.png'; }?>" alt="<?= $result->title?>">
                            <h3 class="h5 my-2 heading"><?= $result->title?></h3>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="ms-2 c-details">
                                        <span class="mr-2"><?= round($interval / (60 * 60 * 24)) ?> days ago</span> <span class="text-secondary"><i class="fa fa-eye" aria-hidden="true"></i> <?= $value['view'] ?> Views</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <?php }?>
                </div>
              </div>
              <!-- <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Third slide">
              </div> -->
            </div>

          </div>
    </div>
<script>
$('#customSwitches0').change(function() {
    $("#customs_share").toggle("false");
})
$('#log11').change(function() {
    $("#end_date").toggle("false");
})
</script>
<script src="<?= base_url('assets/js/image_resize.js?v='.rand()) ?>"></script>


