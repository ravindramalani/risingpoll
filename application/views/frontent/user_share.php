    <style>
    #main #faq .card .card-header .btn-header-link:after {
        content: "\f107";
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        float: right;
    }
    .futter{
        position: absolute;
        /* bottom: 0; */
    }
    .mid-first-share{
        width: 50%;
        border: 1px solid #c0c0c0;
        /* border: 1px solid #343333; */
        /* filter: blur(2px); */
        box-shadow: 0 0 10px 1px rgb(0 0 0 / 14%), 0 1px 14px 2px rgb(0 0 0 / 12%), 0 0 5px -3px rgb(0 0 0 / 30%);
        margin: auto;
        border-radius: 4px;
        text-align: center;
    }
    .heading-share{
        font-family: 'Inter';
        color: #1F5AB2;
        font-style: normal;
        font-weight: 700;
        font-size: 2rem;
        line-height: 48px;
    }
    .head-share {
        color: #1F5AB2;
        font-style: normal;
        font-weight: 700;
        font-size: 1.5rem;
    }
    .wts{
        background-color: #04ae42 !important;
        border: #04ae42 !important;
    }
    .insta{
        background-color: #ff0052 !important;
        border: #BC1888 !important;
    }
    .radio{
        display: none;
    }
    label span {
        position: relative;
        line-height: 22px;
    }
    label span:before,
    label span:after {
        content: '';
    }
    label {
        display: inline-block;
        padding: 5px 10px;
        cursor: pointer;
    }
    label span:before {
        border: 1px solid #222021;
        width: 20px;
        height: 20px;
        margin-right: 10px;
        display: inline-block;
        vertical-align: top;
    }
    .radio-text{
        font-size: 1rem;
        display: block;
    }
    label span:after {
        background: #1f5ab2 !important;
        width: 19px;
        height: 19px;
        position: absolute;
        top: -2px;
        left: 1px;
        transition: 300ms;
        opacity: 0;
    }
    label input:checked+span:after {
        opacity: 1;
    }
    .col-md-4 a{
        text-decoration : none;
        color : black;
    }
    .arrow-right{
        border-top: 25px solid transparent;
        border-bottom: 25px solid transparent;
        border-left: 25px solid #1f5ab2;
    }
    .w-15{
        width: 15% !important;
    }
    .w-70{
        width: 70% !important;
    }
    .items-center {
        align-items: center;
    }
    .flex {
        display: flex;
    }
    .text-lg {
        font-size: 1.125rem;
        line-height: 1.75rem;
    }
    .flex-grow {
        flex-grow: 1;
    }
    .whitespace-nowrap {
        white-space: nowrap;
    }
    .border {
        border-width: 1px;
    }
    .rounded-lg {
        border-radius: 0.5rem;
    }
    .overflow-hidden {
        overflow: hidden;
    }
    .d-toggle{
        display : none;
    }
    
    @media only screen and (max-width: 600px) {
        .mid-first-share{
            width: 100%;
        }
        .arrow{
            width: 50% !important;
        }
    }
</style>
<?php
$poll = json_decode($poll_data['poll']);
$share = json_decode($poll_data['custom_button']);
$count =0;
foreach($poll->option as $options)
{
    $count += $options->option_count;
}
if($poll_data['end_date']){
    $date = strtotime($poll_data['end_date']);
    if(date('dmYhis',$date) <= date('dmYhis')){
        $d_status = true;
    }else{
        $d_status = false;
    }
}else{
    $d_status = false;
}
$msg = preg_replace('/{title}/i', $poll->title, $poll_data['share_msg']);
$msg = preg_replace('/{link}/i', base_url('poll/'.$poll_data['share_id']) , $msg);
$msg =  $msg;
?>
    <div class="container pt-4 pb-1">
        <div class="mid-first-share my-4">
            <?php if(isset($poll->head_img)): ?>
            <div class="share-image">
                <img class="w-100" style="height : 181px" src="<?= base_url('assets/image_poll/'.$poll->head_img) ?>" alt="">
            </div>
            <?php endif;?>
            <div class="text-center px-2 py-3">
                 <span class="head-share"><?php echo $poll->title ?></span>
            </div>
            <div id="msg" class="text-center">
            
            </div>
            <?php if(!$d_status): ?>
            <div class="opt">
                <div class="options text-left px-5">
                <?php $i=0; foreach($poll->option as $value): ?> 
                    <label class="radio-text">
                        <input class="radio" type="radio" name="option" value="<?= 'option_'.$i ?>">
                        <span><?= $value->text; ?></span>
                    </label>
                <?php $i++; endforeach; ?>
                <?php if($poll_data['name'] == 'on'):?>
                <div class="name">
                    <div class="input-group">
                        <input id="name" name="name" class="form-control" type="text" placeholder="Your name">
                    </div>
                </div>
                <?php endif; ?>
                </div>
                <div class="vote-button py-2">
                    <button id="vote" href="" class="btn btn-primary"><?= isset($share->vote_text) ?  $share->vote_text :'Vote' ?></button>
                    <?php if($poll_data['hide_result'] != 'on'):?>
                    <button type="button" id="result" <?=  (!$this->session->userdata('vote'))? 'disabled="disabled"' : '' ?> class="btn btn-primary"><?= isset($share->result_text) ?  $share->result_text :'Result' ?></button>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
            <?php if($poll_data['hide_result'] != 'on'):?>
            <div class="box-result <?php if(!$d_status){ echo  'd-toggle'; } ?>">
                    <div class="options px-4">
                    <div class="append">
                    </div>
                    <?php if(!$d_status){ ?>
                    <div class="vote-button py-2">
                        <button id="back" type="submit" class="btn btn-primary">Back</button>
                    </div>
                    <?php }else{ ?>
                        <p class="text-center text-danger">This poll is over. You can see results</p>
                    <?php } ?>
                </div>
                </div>
                <?php endif; ?>
                <?php if($d_status && $poll_data['hide_result']){ echo  '<p class="text-center text-danger">Results are hidden and poll is over</p>'; } ?>
                <?php 
                    if(isset($share)){
                        if($share->other_share != 'on'){ ?>
                        <div class="share-buttons my-2 px-2 py-3">
                            <a href="whatsapp://send?text=<?= $msg ?>" action="share/whatsapp/share" target="_blank" class="btn w-100 wts btn-primary custom my-2">
                                <i class="fa fa-whatsapp text-white" aria-hidden="true"></i> Whatsapp
                            </a>
                            <a id="share_custom" class="btn w-100 insta btn-primary custom my-2">
                                <i class="fa fa-share text-white" aria-hidden="true"></i> Share
                            </a>
                        </div>
                    <?php  }
                    }else{ ?>
                        <div class="share-buttons my-2 px-2 py-3">
                        <a href="whatsapp://send?text=<?= $msg ?>" action="share/whatsapp/share" target="_blank" class="btn w-100 wts btn-primary custom my-2">
                            <i class="fa fa-whatsapp text-white" aria-hidden="true"></i> Whatsapp
                        </a>
                        <a id="share_custom" class="btn w-100 insta btn-primary custom my-2">
                            <i class="fa fa-share text-white" aria-hidden="true"></i> Share
                        </a>
                    </div>
                   <?php } ?>
    </div>
    <div <?= isset($share->create_text) ?  'style="margin-top:47%"' :'' ?> class="container text-center">
        <a href="<?php echo base_url('create'); ?>" class="btn btn-danger py-3 px-5"><?= isset($share->create_text) ?  $share->create_text :'Create Your Poll' ?></a>
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
                <?php foreach($top_poll as $value){ $result = json_decode($value['poll'])?>
                    <div class="col-md-4">
                    <a href="<?php echo base_url('poll/'.$value['share_id']) ?>#user">
                        <div class="card border-0 w-100">
                          <img height="183px" class="card-img-top" src="<?php if(isset($result->head_img)){ echo base_url('assets/image_poll/'.$result->head_img); }else{  echo base_url('assets/').'image_share.png'; }?>" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title"><?= $result->title?></h5>
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
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
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
                <?php foreach($recent_poll as $value){ $result = json_decode($value['poll'])?>
                    <div class="col-md-4">
                    <a href="<?php echo base_url('poll/'.$value['share_id']) ?>#user">
                        <div class="card border-0 w-100">
                          <img height="183px" class="card-img-top" src="<?php if(isset($result->head_img)){ echo base_url('assets/image_poll/'.$result->head_img); }else{  echo base_url('assets/').'image_share.png'; }?>" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title"><?= $result->title?></h5>
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
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
    </div>
    <?php if($share): ?>
    <div style="background: <?= $share->bg_color ?>;color:  <?= $share->text_color ?>" class="float">
        <a style="color:  <?= $share->text_color ?>" href="whatsapp://send?text=<?= $msg ?>" action="share/whatsapp/share" target="_blank">
            <div class="w-100">
                <?= $share->text ?>
            </div>
            </a>
        
    </div>
    <?php endif; ?>
    <?php  if($d_status){ ?>
    <script>
    $('.append').html('<div class="dot-pulse my-5"></div>');
    fetch(`<?php echo base_url('manage/result/'.$poll_data['share_id']) ?>`)
        .then(res => res.json() )
        .then(function (data) {
            $(".append").html(`${data.msg}`);
    });
    </script>
    <?php }?>
    <script>
function my() {

      var Text = document.getElementById("foo");
      Text.select();
      navigator.clipboard.writeText(Text.value);
    
  }
</script>
<script>
$('#share_custom').on('click', () => {
  if (navigator.share) {
    navigator.share({
        title: '<?= $poll->title  ?>', 
        text: '<?= $msg ?>',
      })
      .then(() => console.log('Successful share'))
      .catch((error) => console.log('Error sharing', error));
  } else {
    console.log('Share not supported on this browser, do it the old way.');
  }
});
</script>


    <!-- -------------------------------Futtter Div----------------------------------->
