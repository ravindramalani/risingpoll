function resizeImage(event) {
    var input = event.target;
    $('.preview').html('<div class="dot-pulse my-5"></div>');
    var file = input.files[0];
    const  fileType = file['type'];
    const validImageTypes = ['image/jpeg', 'image/png'];
    if (validImageTypes.includes(fileType)) {
        var url = document.querySelector('meta[name="site_url"]').content;
        var reader = new FileReader();
        reader.onload = function() {
        var image = new Image();
        image.onload = function() {
            var canvas = document.createElement('canvas');
            var ctx = canvas.getContext('2d');
            var maxWidth = 1200;
            var maxHeight = 800;
            var width = image.width;
            var height = image.height;
            if (width > maxWidth) {
            height *= maxWidth / width;
            width = maxWidth;
            }
            if (height > maxHeight) {
            width *= maxHeight / height;
            height = maxHeight;
            }
            canvas.width = width;
            canvas.height = height;
            ctx.drawImage(image, 0, 0, width, height);
            var dataUrl = canvas.toDataURL(file.type);
            var formData = new FormData();
            formData.append('image', dataUrl);
            var xhr = new XMLHttpRequest();
            xhr.open('POST', url+'manage/image_upload');
            xhr.onload = function() {
                var response =  JSON.parse(xhr.responseText);
                if(response.status){
                    document.querySelector('#hiddeninput').value = response.msg;
                    document.querySelector('.preview').innerHTML = '<img width="100%" src="'+dataUrl+'">';
                }else{
                    document.querySelector('.preview').innerHTML = response.msg
                }
            };
            xhr.onerror = function() {
                document.querySelector('.preview').innerHTML = '<p class="text-center text-danger">Error</p>';
            };
            xhr.send(formData);
        };
        image.src = reader.result;
        };
        reader.readAsDataURL(file);
    }else{
        document.querySelector('.preview').innerHTML = '<p class="text-center text-danger">Wrong image format</p>';
    }
  }