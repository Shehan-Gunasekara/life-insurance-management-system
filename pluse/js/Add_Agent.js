function PasswordValidation(){
	if(document.getElementById("password1").value != document.getElementById("password2").value){
		alert("Password Mismatch!");
		return false;
	}
}


function Validation(){
	var imgInput = document.getElementById('img');
              
            var filePath = imgInput.value;
            var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type');
                imgInput.value = '';
                return false;
            } 
            else 
            {
              
                if (imgInput.files && imgInput.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById(
                            'imagePreview').innerHTML = 
                            '<img src="' + e.target.result
                            + '"/>';
                    };
                      
                    reader.readAsDataURL(imgInput.files[0]);
                }
            }
            
}