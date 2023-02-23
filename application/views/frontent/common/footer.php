<style>
    /* .futter{
        position : fixed;
        bottom : 0 ;
    } */
</style>
    <div class="container-fluid futter">
        <h1 class="futterhdng">© <?= date("Y") ?> Risingpoll. All rights reserved.</h1>
        <div>
            <a href="<?= base_url('privacy') ?>">Privacy</a>
        </div>
        <div>
            <a href="<?= base_url('manage/contact') ?>">contact</a>
        </div>
    </div>
    
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