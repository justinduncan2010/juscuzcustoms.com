<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<script type="text/javascript">
function focus(){	

document.register.firstname.onfocus = function(){
	var first = document.getElementById('first');
	var hint1 = document.getElementById('hint1');	
	hint1.innerText = "alpha-numeric characters only";
	hint1.style.color = "green";
	}
document.register.lastname.onfocus = function(){
	var last = document.getElementById("last");
	var hint2 = document.getElementById('hint2');
	hint2.style.color = "green";
	hint2.innerText = "alpha-numeric characters only";
}
document.register.telephone.onfocus = function(){
	var phone = document.getElementById("telephone");
	var hint3 = document.getElementById('hint3');
	hint3.style.color = "green";
	hint3.innerText = "format: XXX-XXX-XXXX";
}
document.register.email.onfocus = function(){
	var email = document.getElementById("email");
	var hint4 = document.getElementById('hint4');
	hint4.style.color = "green";
	hint4.innerText = "format: someone@somewhere.com";
}
document.register.mobile.onfocus = function(){
	var mobile = document.getElementById("mobile");
	var hint5 = document.getElementById('hint5');
	hint5.style.color = "green";
	hint5.innerText = "format: XXX-XXX-XXXX";
}
}
function validateData(event){
	var hint1 = document.getElementById('hint1');
	var hint2 = document.getElementById('hint2');
	var hint3 = document.getElementById('hint3');
	var hint4 = document.getElementById('hint4');
	var hint5 = document.getElementById('hint5');
	var first_name_valid = false;
	var last_name_valid = false;
	var email_valid = false;
	var telephone_valid = false;
	var mobile_valid = false;
	var radio = false;
	var radio2 = false;
	var radio3 = false;
	var radio4 = false;
	var radio5 = false;
	
	//first name check
	document.register.firstname.onblur = function (){	
	if(this.value.match(/^[A-Za-z]*$/)){
		hint1.innerText = "";
		var check = document.createElement('img');
		check.setAttribute('src',"img/check.png");
      	hint1.appendChild(check);
		first_name_valid = true;
	}
	if(!this.value.match(/^[A-Za-z]*$/) || this.value.length === 0){
		hint1.innerText = "";
		var check = document.createElement('img');
		check.setAttribute('src',"img/ex.png");
		hint1.appendChild(check);

	}
	}
	//last name check
	document.register.lastname.onblur = function(){	
	if(this.value.match(/^[A-Za-z]*$/)){
		hint2.innerText = "";
		var check = document.createElement('img');
		check.setAttribute('src',"img/check.png");
		hint2.appendChild(check);
		last_name_valid = true;
	}
	if(!this.value.match(/^[A-Za-z]*$/) || this.value.length === 0){
		hint2.innerText = "";
		var check = document.createElement('img');
		check.setAttribute('src',"img/ex.png");
		hint2.appendChild(check);
	}
	}
	//phone number check
	document.register.telephone.onblur = function(){	
	if(this.value.match(/^([0-9]{3})(-)([0-9]{3})(-)([0-9]{4})$/)){
		hint3.innerText = "";
		var check = document.createElement('img');
		check.setAttribute('src',"img/check.png");
		hint3.appendChild(check);
		phone_valid = true;
	}
	if(!this.value.match(/^([0-9]{3})(-)([0-9]{3})(-)([0-9]{4})$/) || this.value.length === 0){
		hint3.innerText = "";
		var check = document.createElement('img');
		check.setAttribute('src',"img/ex.png");
		hint3.appendChild(check);

	}
	}
	
	//email check
	document.register.email.onblur = function(){
	if(this.value.match(/^([A-Za-z0-9]+)(@)([A-Za-z0-9]+)(.)([a-z]+)$/)){
		hint4.innerText = "";
		var check = document.createElement('img');
		check.setAttribute('src',"img/check.png");
		hint4.appendChild(check);
		email_valid = true;
		
	}
	if(!this.value.match(/^([A-Za-z0-9]+)(@)([A-Za-z0-9]+)(.)([a-z]+)$/) || this.value.length === 0){
		hint4.innerText = "";
		var check = document.createElement('img');
		check.setAttribute('src',"img/ex.png");
		hint4.appendChild(check);
		
	}
	}
	//mobile number check
	document.register.mobile.onblur = function(){	
	if(this.value.match(/^([0-9]{3})(-)([0-9]{3})(-)([0-9]{4})$/)){
		hint5.innerText = "";
		var check = document.createElement('img');
		check.setAttribute('src',"img/check.png");
		hint3.appendChild(check);
		phone_valid = true;
	}
	if(!this.value.match(/^([0-9]{3})(-)([0-9]{3})(-)([0-9]{4})$/) || this.value.length === 0){
		hint5.innerText = "";
		var check = document.createElement('img');
		check.setAttribute('src',"img/ex.png");
		hint3.appendChild(check);

	}
	}
var checks = document.getElementById('checkbox');
checks.addEventListener('click',checkbox(),true);
	function checkbox(){
	            if(checks.checked) {

					document.getElementById("button").disabled = false;
                }else{
					document.getElementById("button").disabled = true;
				}
	}
	//validating the for data after submit
	function validateForm(first_name_valid, last_name_valid, email_valid, phone_valid, mobile_valid){
		if(first_name_valid && last_name_valid && email_valid && phone_valid && mobile_valid){
			 	
		return false;		 
		}
		else{
		alert("Please fill out the entire form!");
		return false;
		}
	}
                document.getElementById('button').onclick = function() {
					validateForm(first_name_valid, last_name_valid, email_valid, phone_valid, sulley_valid,radio,radio2,radio3,radio4,radio5);
                    return false;
                }
}
			               
        
            function load() 
                {
                    focus();
                    validateData();   
                }
            window.onload = load;
			</script>

</body>
</html>