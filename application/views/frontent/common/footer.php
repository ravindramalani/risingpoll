<style>
    /* .futter{
        position : fixed;
        bottom : 0 ;
    } */
</style>
    <div class="container-fluid futter">
        <h1 class="futterhdng">Copyright@ Eniacoder</h1>
    </div>
    <!-- <script>
        $('#vote').click(function(){
            var formData = new FormData();
            formData.append('option', $('input[name="option"]:checked').val());
            
            fetch(`<?php echo base_url('manage/response/'.$poll_data['share_id']) ?>`, {
                method: "POST",
                body: formData,
            })
            .then(res => res.json() )
            .then(data => console.log(data.msg));
        })
    </script> -->
    <!-- <script>
       $('#result , #back').click(function(){
            $('.opt').toggle('false');
            $('.box-result').toggle('false');
       })
    </script> -->
    <script>
$('#customSwitches0').change(function() {
    $("#customs_share").toggle("false");
})
$('#log11').change(function() {
    $("#end_date").toggle("false");
})
</script>
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
                $("#msg").html(`${data.msg}`);
                $('#msg').delay(400).fadeOut('slow');
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
<script>

var date = document.getElementById('date');
        var date_one = document.getElementById('date_one');
        
function checkValue(str, max) {
  if (str.charAt(0) !== '0' || str == '00') {
    var num = parseInt(str);
    if (isNaN(num) || num <= 0 || num > max) num = 1;
    str = num > parseInt(max.toString().charAt(0)) && num.toString().length == 1 ? '0' + num : num.toString();
  };
  return str;
};

date.addEventListener('input', function(e) {
  this.type = 'text';
  var input = this.value;
  if (/\D\/$/.test(input)) input = input.substr(0, input.length - 3);
  var values = input.split('/').map(function(v) {
    return v.replace(/\D/g, '')
  });
  if (values[0]) values[0] = checkValue(values[0], 31);
  if (values[1]) values[1] = checkValue(values[1], 12);
  var output = values.map(function(v, i) {
    return v.length == 2 && i < 2 ? v + ' / ' : v;
  });
  this.value = output.join('').substr(0, 14);
});

date_one.addEventListener('input', function(e) {
  this.type = 'text';
  var input = this.value;
  if (/\D\/$/.test(input)) input = input.substr(0, input.length - 3);
  var values = input.split('/').map(function(v) {
    return v.replace(/\D/g, '')
  });
  if (values[0]) values[0] = checkValue(values[0], 31);
  if (values[1]) values[1] = checkValue(values[1], 12);
  var output = values.map(function(v, i) {
    return v.length == 2 && i < 2 ? v + ' / ' : v;
  });
  this.value = output.join('').substr(0, 14);
});



date.addEventListener('blur', function(e) {
  this.type = 'text';
  var input = this.value;
  var values = input.split('/').map(function(v, i) {
    return v.replace(/\D/g, '')
  });
  var output = '';
  
  if (values.length == 3) {
    var year = values[2].length !== 4 ? parseInt(values[2]) + 2000 : parseInt(values[2]);
    var month = parseInt(values[0]) - 1;
    var day = parseInt(values[1]);
    var d = new Date(year, month, day);
    if (!isNaN(d)) {
      document.getElementById('result').innerText = d.toString();
      var dates = [d.getMonth() + 1, d.getDate(), d.getFullYear()];
      output = dates.map(function(v) {
        v = v.toString();
        return v.length == 1 ? '0' + v : v;
      }).join(' / ');
    };
  };
  this.value = output;
});

date_one.addEventListener('blur', function(e) {
  this.type = 'text';
  var input = this.value;
  var values = input.split('/').map(function(v, i) {
    return v.replace(/\D/g, '')
  });
  var output = '';
  
  if (values.length == 3) {
    var year = values[2].length !== 4 ? parseInt(values[2]) + 2000 : parseInt(values[2]);
    var month = parseInt(values[0]) - 1;
    var day = parseInt(values[1]);
    var d = new Date(year, month, day);
    if (!isNaN(d)) {
      document.getElementById('result').innerText = d.toString();
      var dates = [d.getMonth() + 1, d.getDate(), d.getFullYear()];
      output = dates.map(function(v) {
        v = v.toString();
        return v.length == 1 ? '0' + v : v;
      }).join(' / ');
    };
  };
  this.value = output;
});
</script>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>