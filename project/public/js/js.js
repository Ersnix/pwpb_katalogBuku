
    function tampil() {
            var datatype = document.getElementById('password').type;
            if (datatype == "password") {
                document.getElementById('password').type = "text";
                document.getElementById('tampil').innerHTML = "<i class='fas fa-eye-slash'></i>";
            }else
            if (datatype == "text") {
                document.getElementById('password').type = "password";
                document.getElementById('tampil').innerHTML = '<i class="fas fa-eye"></i>';
            }
            
    }
    
   