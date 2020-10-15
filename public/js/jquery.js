 $("#password").keyup(function( index ) {
        var datatype = document.getElementById('password').type;
        if (datatype == "password") {
            document.getElementById('tampil').innerHTML = '<i class="fas fa-eye"></i>';
        }else
        if (datatype == "text") {
            document.getElementById('tampil').innerHTML = '<i class="fas fa-eye-slash"></i>';
        }
        
    
        let caraa = $(this).val();
        let tot = caraa.length;
        var Progres = 0;
        if (tot >= 8) {
            document.getElementById('panjang').className = "sudah";
            document.getElementById('char').className = "fas fa-check-circle";
            Progres = Progres+1;
        }else{
            document.getElementById('panjang').className = "belum";
            document.getElementById('char').className = "fas fa-times-circle";
            Progres = Progres;
        }
        if (/[A-Z]/.test(caraa) && /[a-z]/.test(caraa)) {
            document.getElementById('kapital').className = "sudah";
            document.getElementById('upp').className = "fas fa-check-circle";
            Progres = Progres+1;
        }else{
            document.getElementById('kapital').className = "belum";
            document.getElementById('upp').className = "fas fa-times-circle";
            Progres = Progres;
        }
        if (/[!@#$%^&*]/.test(caraa)) {
            document.getElementById('simbol').className = "sudah";
            document.getElementById('sym').className = "fas fa-check-circle";
            Progres = Progres+1;
        }else{
            document.getElementById('simbol').className = "belum";
            document.getElementById('sym').className = "fas fa-times-circle";
            Progres=Progres;
        }
        if (/[0-9]/.test(caraa)) {
            document.getElementById('angka').className = "sudah";
            document.getElementById('num').className = "fas fa-check-circle";
            Progres = Progres+1;
        }else{
            document.getElementById('angka').className = "belum";
            document.getElementById('num').className = "fas fa-times-circle";
            Progres = Progres;
        }
        if (tot >= 8 && /[A-Z]/.test(caraa) && /[a-z]/.test(caraa) && /[!@#$%^&*]/.test(caraa) && /[1-9]/.test(caraa) ) {
            document.getElementById('submit').className = "submit";
            document.getElementById('tit').className = "tit";
        }else{
            document.getElementById('submit').className = "submit1";
            document.getElementById('tit').className = "titb";
        }
        if (document.getElementById('submit').className == "submit") {
            $('#form').attr('action','/register/prosesRegister');
        }else{
            $('#form').attr('method','post');
            $('#form').attr('action','/register');
        }


    });