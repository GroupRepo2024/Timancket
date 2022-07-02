let password = _('password');
let passwordconfirm = _('password_retype');
let divcomp = _('divcomp');

passwordconfirm.onkeyup = function(){
	var pass1 = password.value;
	var pass2 = passwordconfirm.value;

	if(pass1.indexOf(pass2) == -1){
		divcomp.innerHTML = "Erreur password don't match !";
	}else{
		divcomp.innerHTML = "";
	}
}

function _(e){
  return document.getElementById(e);
}
