function report_poll(){
    var val ='';
    var id = $('#report_modal').attr("identity");
    console.log(id);
    var url = document.querySelector('meta[name="site_url"]').content;
    if (document.querySelector('input[name="report"]:checked') != null) {
        val = document.querySelector('input[name="report"]:checked').value;
    }
    if(val){
        var formData = new FormData();
        formData.append('option', $('input[name="report"]:checked').val());
        $('#report_body').html('<div class="dot-pulse my-5"></div>');
        fetch(url+'manage/report_poll/'+id, {
            method: "POST",
            body: formData,
        })
        .then(res => res.json())
        .then(function(data){
            $('#report_body').html(data.report);
        })
    }else{
        alert('Select Report Option');
    }
}
$('#report_modal').click(function(){
    $('#report_body').html('<div class="dot-pulse my-5"></div>');
    var id = $(this).attr("identity");
    var url = document.querySelector('meta[name="site_url"]').content;
    fetch(url+'manage/reports/'+id)
    .then(res => res.json())
    .then(function(data){
        $('#report_body').html(data.report);
    })
})