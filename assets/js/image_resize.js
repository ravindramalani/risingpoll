function checkImageFormat(file) {
    const acceptedFormats = ["image/jpeg", "image/png"];
    return acceptedFormats.includes(file.type);
  }
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
// Get the input element for the image file
 var imageInput = document.getElementById("head_img");
 var hiddeninput = document.getElementById("hiddeninput");
 // Add an event listener to the input element to handle file selection
 imageInput.addEventListener("change", function() {
   // Get the selected file
   var file = imageInput.files[0];
   const fileSize = file.size;
   if (checkImageFormat(file)) {
    if(fileSize > 204800){
        // Create a FileReader to read the file
        var reader = new FileReader();

        // Set up the FileReader to handle file load
        reader.onload = function(event) {
        // Create an image element and set its source to the loaded data URL
        var img = new Image();
        img.src = event.target.result;

        // When the image is loaded, resize it and display it
        img.onload = function() {
        // Create a canvas element
        var canvas = document.createElement("canvas");

        // Set the canvas dimensions to the desired size
        var width = 500; // set the desired width
        var height = img.height * (width / img.width); // calculate the proportional height
        canvas.width = width;
        canvas.height = height;

        // Draw the image onto the canvas at the new size
        var ctx = canvas.getContext("2d");
        ctx.drawImage(img, 0, 0, width, height);

        // Get the resized image as a data URL
        var dataURL = canvas.toDataURL();

        // Update the input element's value to the resized image data URL
        console.log(dataURL);
        hiddeninput.value = dataURL;
        
        };
    };

    // Read the file as a data URL
    reader.readAsDataURL(file);
    }else{
        const reader = new FileReader();
        reader.onload = function() {
            const base64String = reader.result.split(',')[1]; // get the base64-encoded string
            imagePreview = `data:image/jpeg;base64,${base64String}`; 
            hiddeninput.value = imagePreview; // do something with the base64-encoded string
        };
        reader.readAsDataURL(file);
    }
    $('.preview').html('<img id="blah" height="183px" width="100%" src="#" alt="your image" />');
    readURL(this);
    }else{
        alert('not valid image');
    }

 });