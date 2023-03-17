$('#report_poll').click(function(){
    var val ='';
    var url = document.querySelector('meta[name="site_url"]').content;
    if (document.querySelector('input[name="report"]:checked') != null) {
        val = document.querySelector('input[name="report"]:checked').value;
    }
    if(val){
        var formData = new FormData();
        formData.append('option', $('input[name="report"]:checked').val());
        fetch(url+'manage/report_poll', {
            method: "POST",
            body: formData,
        })
        .then(res => res.json())
        .then()
    }else{
        alert('Select Report Option');
    }
})