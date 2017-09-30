function showPreview(objFileInput) {
    if (objFileInput.files[0]) {
        var fileReader = new FileReader();
        fileReader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
            $("#targetLayer").html('<img style=" border-radius:5%; padding:5px;" src="'+e.target.result+'"  width="200px" height="200px" class="image-preview-input" />');
            $("#targetLayer").css('opacity','0.9');
            $(".icon-choose-image").css('opacity','0.9');
        }
        fileReader.readAsDataURL(objFileInput.files[0]);


            var oFile = document.getElementById("userImage").files[0]; // <input type="file" id="fileUpload" accept=".jpg,.png,.gif,.jpeg"/>

            if (oFile.size > 1500000) // 2 mb for bytes.
            {
                alert("Too large Image. Only image smaller than 2MB can be uploaded.");
                return;
            }
    }
}