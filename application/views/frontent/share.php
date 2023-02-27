<script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.10/dist/clipboard.min.js"></script>
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
        background: linear-gradient(269.64deg, #BC1888 12.05%, #DC2743 38.26%, #F09433 71.72%) !important;
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
            width: 90%;
        }
    }
</style>
<?php
$poll = json_decode($poll_data['poll']);
$count =0;
foreach($poll->option as $options)
{
    $count += $options->option_count;
}
$msg = preg_replace('/{title}/i', $poll->title, $poll_data['share_msg']);
$msg = preg_replace('/{link}/i', base_url('poll/'.$poll_data['share_id']) , $msg);
// $msg =  $msg;
// die;
?>
    <div class="container py-4">
        <div class="mid-first-share py-4 px-3">
            <span class="heading-share">Your Poll is Ready</span>
            <p>Share this link with your friends</p>
            <div class="copy-section">
                <input disabled class="form-control py-2 px-2" id="foo" value="<?php echo base_url('poll/'.$poll_data['share_id']) ?>" type="text" name="">
                <button id="btn" onclick="my()" class="btn btn-primary custom my-3">
                    Copy Url
                </button>
            </div>
            <div class="share-buttons my-2">
                <a href="whatsapp://send?text=<?= $msg ?>" action="share/whatsapp/share" target="_blank" class="btn w-100 wts btn-primary custom my-2">
                    <i class="fa fa-whatsapp text-white" aria-hidden="true"></i> Whatsapp
                </a>
                <a id="share_custom" class="btn w-100 insta btn-primary custom my-2">
                    <i class="fa fa-share text-white" aria-hidden="true"></i> Share
                </a>
            </div>
        </div>
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
            
            </diV>
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
                    <button id="vote" href="" class="btn btn-primary">Vote</button>                  
                    <button type="button" id="result" class="btn btn-primary">Result</button>
                </div>
            </div>
            <div class="box-result d-toggle">
                    <div class="options px-4">
                    <div class="append">
                    </div>
                    <div class="vote-button py-2">
                        <button id="back" type="submit" class="btn btn-primary">Back</button>
                    </div>
            </div>
        </div>
    </div>
    <div class="container py-2">
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
              <!-- <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Third slide">
              </div> -->
            </div>
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
    </div>

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
