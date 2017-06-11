function compruebaPassword(){
		var Pass = document.getElementById("pass");
		var Repass = document.getElementById("rePass");
		var btnGuarda = document.getElementById("btnGuarda");
		
		
		if(Pass.value == Repass.value){
			btnGuarda.disabled = false;
			//document.getElementById("btnGuarda").disabled = false; 
		}else{
			btnGuarda.disabled = true;
			//document.getElementById("btnGuarda").disabled = true; 
		}
		
}