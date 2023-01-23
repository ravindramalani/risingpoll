
        <style>
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
        </style>
        <div class="accordion" id="accordionExample">
            <?php if($polls):foreach($polls as $value): ?>
                <?php
                    $poll = json_decode($value['poll']);
                    $custom = json_decode($value['custom_button']);
                 ?>
            <div class="card">
                <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-col" type="button" data-toggle="collapse" data-target="#collapseOne<?= $value['share_id'] ;?>" aria-expanded="true" aria-controls="collapseOne">
                    <?= $poll->title; ?>
                    </button>
                </h2>
                </div>
                <div id="collapseOne<?= $value['share_id'] ;?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="setting-tab<?= $value['share_id'] ;?>" data-toggle="tab" href="#setting<?= $value['share_id'] ;?>" role="tab" aria-controls="setting<?= $value['share_id'] ;?>" aria-selected="true">Setting</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link result" id="result-tab<?= $value['share_id'] ;?>" data-toggle="tab" share_id="<?= $value['share_id'] ;?>" href="#result<?= $value['share_id'] ;?>" role="tab" aria-controls="result<?= $value['share_id'] ;?>" aria-selected="false">Result</a>
                        </li>
                        <?php if($this->session->userdata('uid') == 1 || $this->session->userdata('uid') == 2 || $this->session->userdata('uid') == 3):?>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tab<?= $value['share_id'] ;?>" data-toggle="tab" share_id="<?= $value['share_id'] ;?>" href="#custom<?= $value['share_id'] ;?>" role="tab" aria-controls="custom<?= $value['share_id'] ;?>" aria-selected="false">Custom Button</a>
                        </li>
                        <?php endif; ?>
                    </ul>
                    <div class="tab-content py-2" id="myTabContent">
                        <div class="tab-pane fade show active" id="setting<?= $value['share_id'] ;?>" role="tabpanel" aria-labelledby="setting-tab<?= $value['share_id'] ;?>">
                            <div class="update px-3">
                            <div class="m-auto w-75 py-3 setting<?= $value['share_id'] ;?> text-center"></div>

                                <div class="custom-control custom-switch">
                                            <input <?= $value['private'] ? 'checked' : '' ?> share_id='<?= $value['share_id'] ;?>' type="checkbox" name="m_private" class="custom-control-input" id="a<?= $value['share_id'] ;?>">
                                            <label class="custom-control-label" for="a<?= $value['share_id'] ;?>">Make it private
                                            </label>
                                </div>
                                <div class="custom-control custom-switch">
                                        <input <?= $value['ip'] ? 'checked' : '' ?> type="checkbox" share_id='<?= $value['share_id'] ;?>' name="one_vote_ip" class="custom-control-input" id="b<?= $value['share_id'] ;?>">
                                        <label class="custom-control-label" for="b<?= $value['share_id'] ;?>">One vote per IP address
                                        </label>
                                </div>
                                <div class="custom-control custom-switch">
                                        <input <?= $value['session'] ? 'checked' : '' ?> type="checkbox" share_id='<?= $value['share_id'] ;?>' name="one_vote_session" class="custom-control-input" id="d<?= $value['share_id'] ;?>">
                                        <label class="custom-control-label" for="d<?= $value['share_id'] ;?>">One vote one browser session
                                        </label>
                                </div>
                                <div class="custom-control custom-switch">
                                            <input <?= $value['hide_result'] ? 'checked' : '' ?> type="checkbox" share_id='<?= $value['share_id'] ;?>' name="h_result" class="custom-control-input" id="e<?= $value['share_id'] ;?>">
                                            <label class="custom-control-label" for="e<?= $value['share_id'] ;?>">Hide Result
                                            </label>
                                </div>
                                <div class="custom-control custom-switch">
                                        <input <?= $value['name'] ? 'checked' : '' ?>  type="checkbox" share_id='<?= $value['share_id'] ;?>' name="u_name" class="custom-control-input" id="f<?= $value['share_id'] ;?>">
                                        <label class="custom-control-label" for="f<?= $value['share_id'] ;?>">Ask Name
                                        </label>
                                </div>
                                <div class="custom-control custom-switch">
                                        <input share_id="g<?= $value['share_id'] ;?>" type="checkbox" class="custom-control-input custom_box" id="cust<?= $value['share_id'] ;?>">
                                        <label class="custom-control-label" for="cust<?= $value['share_id'] ;?>">Custom Share Message & End Date
                                        </label>
                                </div>
                                <div class="custom-share px-3 d-toggle" id="g<?= $value['share_id'] ;?>">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-danger" for="">Note : Use {title} for Use Title in sharing and for link {link} </label>
                                                <textarea class="form-control"   id="custo<?= $value['share_id'] ;?>" rows="2" placeholder="ex : { title }  {link} "><?= $value['share_msg'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text "placeholder="Select a date" value="<?= $value['end_date'] ? $value['end_date'] : ''?>" onfocus="$(this).hide().next().attr('hidden',false).focus();"/>
                                                <input type="datetime-local" id="end_date_name<?= $value['share_id'] ;?>" hidden="true">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <a name="custom_end" share_id='<?= $value['share_id'] ;?>' class="btn btn-primary custom_end">Submit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="tab-pane fade" id="result<?= $value['share_id'] ;?>" role="tabpanel" aria-labelledby="result-tab<?= $value['share_id'] ;?>">
                            <div class="m-auto w-75 py-3 append<?= $value['share_id'] ;?> text-center"></div>
                        </div>
                        <?php if($this->session->userdata('uid') == 1 || $this->session->userdata('uid') == 2 || $this->session->userdata('uid') == 3): ?>
                        <div class="tab-pane fade" id="custom<?= $value['share_id'] ;?>" role="tabpanel" aria-labelledby="custom-tab<?= $value['share_id'] ;?>">
                            <div class="container text-center py-3">
                                <div class="m-auto w-75 py-3 color<?= $value['share_id'] ;?> text-center"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">                                           
                                            <lable>Text Color</label>
                                            <input id="text_color<?= $value['share_id'] ;?>" value="<?= isset($custom->text_color)? $custom->text_color : '' ?>" class="form-control" type="color" name="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <lable>Background Color</label>
                                            <input id="bg_color<?= $value['share_id'] ;?>" value="<?= isset($custom->bg_color)? $custom->bg_color : '' ?>" class="form-control" type="color" name="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">                                           
                                     <lable>Text</label>
                                    <input id="text<?= $value['share_id'] ;?>" value="<?= isset($custom->text)? htmlspecialchars($custom->text) : '' ?>" class="form-control" type="text" name="">
                                </div>
                                <div class="custom-control custom-switch">
                                        <input type="checkbox"<?= isset($custom->other_share)? 'checked' : '' ?> id="other_share<?= $value['share_id'] ;?>" class="custom-control-input">
                                        <label class="custom-control-label" for="other_share<?= $value['share_id'] ;?>">Turn off Other sharing
                                        </label>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">                                           
                                            <lable>Vote text</label>
                                            <input value="<?= isset($custom->vote_text)? $custom->vote_text : '' ?>" id="vote_text<?= $value['share_id'] ;?>" class="form-control" type="text" name="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <lable>Result Text</label>
                                            <input value="<?= isset($custom->result_text)? $custom->result_text : '' ?>" id="result_text<?= $value['share_id'] ;?>" class="form-control" type="text" name="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <lable>Create Your Poll Text</label>
                                            <input value="<?= isset($custom->create_text)? $custom->create_text : '' ?>" id="create_text<?= $value['share_id'] ;?>" class="form-control" type="text" name="">
                                        </div>
                                    </div>
                                </div>
                                <a share_id="<?= $value['share_id'] ;?>" class="color btn btn-primary custom my-3">
                                    Submit
                                 </a>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="copy-section w-75 my-3 mx-auto">
                        <input disabled class="form-control py-2 px-2" id="foo" value="<?php echo base_url('poll/'.$value['share_id']) ?>" type="text" name="">
                    </div>
                    <div class="action py-1 text-center">
                        <a href="<?php echo base_url('poll/'.$value['share_id']) ?>" class="btn btn-warning custom my-3">
                           View
                        </a>
                        <a id="btn" onclick="my()" class="btn btn-primary custom my-3">
                            Copy Url
                        </a>
                        <a href="<?= base_url('dashboard/delete_poll/'.$value['share_id']) ?>" class="btn btn-danger">Delete</a>
                    </div>
                </div>
                </div>
            </div>
            <?php endforeach; else:?>
            <div class="text-center">
                <h3 class="text-danger">No Polls Available</h3>
                <p class="">Start Creating Your Poll Today</p>
                <a href="<?= base_url('manage/create_page') ?>" class="btn btn-primary custom my-3">Create Poll</a>
            </div>
                <?php endif; ?>
            </div>
        </div>
<!-- dashboard -->
    </div>
</section>
<script>
     $('.custom-control-input').change(function() {
        
        var status = '';
        if($(this).prop('checked') == true){
            status = 'on';
        }
        var share_id = $(this).attr("share_id");
        $('.setting'+share_id).html('<div class="dot-pulse my-5"></div>');
        var name = $(this).attr("name");
        
        var formData = new FormData();
        formData.append('status', status);
        formData.append('name', name);
        fetch(`<?php echo base_url('manage/update/') ?>`+share_id, {
                method: "POST",
                body: formData,
            })
            .then(res => res.json() )
            .then(function (data) {
                // console.log(data)
                $('.setting'+share_id).html('<p class="text-success">Submitted</p>');
            });
     })
     
</script>
<script>
     $('.custom_end').click(function() {
         var share_id = $(this).attr("share_id");
         $('.setting'+share_id).html('<div class="dot-pulse my-5"></div>');
        var formData = new FormData();
        if($('#end_date_name'+share_id).val()){
            formData.append('end_date_name', $('#end_date_name'+share_id).val());
        }
        if($('#custo'+share_id).val() != $(this).attr("share_id")){
            formData.append('custo', $('#custo'+share_id).val());
        }
        fetch(`<?php echo base_url('manage/update/') ?>`+share_id, {
                method: "POST",
                body: formData,
            })
            .then(res => res.json() )
            .then(function (data) {
                // console.log(data)
                $('.setting'+share_id).html('<p class="text-success">Submitted</p>');

            });
     })
</script>
<script>
$('.custom_box').change(function(){
        var id = $(this).attr("share_id");
        $('#'+id).toggle("false");
})
</script>
<script>
     $('.color').click(function() {
        
        var status = '';
        var share_id = $(this).attr("share_id");
        $('.color'+share_id).html('<div class="dot-pulse my-5"></div>');
        if($('#other_share'+share_id).prop('checked') == true){
            status = 'on';
        }
        // $('#color').attr("disabled", true);
        var formData = new FormData();
        formData.append('other_share', status);
        formData.append('text_color', $('#text_color'+share_id).val());
        formData.append('bg_color', $('#bg_color'+share_id).val());
        formData.append('color', true);
        formData.append('text', $('#text'+share_id).val());
        formData.append('vote_text', $('#vote_text'+share_id).val());
        formData.append('result_text', $('#result_text'+share_id).val());
        formData.append('create_text', $('#create_text'+share_id).val());
        fetch(`<?php echo base_url('manage/update/') ?>`+share_id, {
                method: "POST",
                body: formData,
            })
            .then(res => res.json() )
            .then(function (data) {
                $('.color'+share_id).html('<p class="text-success">Submitted</p>');
            });
     })
</script>
<script>
$('.result').click(function(){
    var share_id = $(this).attr("share_id");
    $('.append'+share_id).html('<div class="dot-pulse my-5"></div>');
    fetch(`<?php echo base_url('manage/result/') ?>`+share_id)
        .then(res => res.json() )
        .then(function (data) {
            $(".append"+share_id).html(`${data.msg}`);
    });
})
</script>
<script>
function my() {
      var Text = document.getElementById("foo");
      Text.select();
      navigator.clipboard.writeText(Text.value);
  }
</script>


