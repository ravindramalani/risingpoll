
        
        <div class="accordion" id="accordionExample">
            <?php if($polls):foreach($polls as $value): ?>
                <?php
                    $poll = json_decode($value['poll']);
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
                    <div class="update px-3">
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
                                    <input <?= $value['end_date'] ? 'checked' : '' ?> type="checkbox" share_id='<?= $value['share_id'] ;?>' class="custom-control-input" id="c<?= $value['share_id'] ;?>">
                                    <label class="custom-control-label" for="c<?= $value['share_id'] ;?>">Set end date
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
                                <input type="checkbox"  class="custom-control-input" id="g<?= $value['share_id'] ;?>">
                                <label class="custom-control-label" for="g<?= $value['share_id'] ;?>">Custom Share Message
                                </label>
                        </div>
                    </div>
                    <div class="copy-section w-75 my-3 mx-auto">
                        <input disabled class="form-control py-2 px-2" id="foo" value="<?php echo base_url('poll/'.$value['share_id']) ?>" type="text" name="">
                    </div>
                    <div class="action py-1 text-center">
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
        var name = $(this).attr("name");
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
                console.log(data)
            });
     })
</script>
<script>
function my() {
    
      alert('copied');
      var Text = document.getElementById("foo");
      Text.select();
      navigator.clipboard.writeText(Text.value);
  }
</script>


