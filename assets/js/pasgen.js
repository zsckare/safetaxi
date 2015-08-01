var pass;
    function generar() {
   	e = document.getElementById('pass');
    pass=randomString(9);

    sweetAlert("La Contraseña Generada es",pass, "success");
    e.value=pass;
    }

	function randomString(len, charSet) {
	    charSet = charSet || 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
	    var randomString = '';
	    for (var i = 0; i < len; i++) {
	    	var randomPoz = Math.floor(Math.random() * charSet.length);
	    	randomString += charSet.substring(randomPoz,randomPoz+1);
	    }
	    return randomString;
	}