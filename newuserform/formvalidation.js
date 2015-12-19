function checkForm(form)
{   //array to store errors
	var errors=[];
  	
  	//validation fails if input is blank

    if(form.firstname.value == "") {
    	errors.push("First Name field is empty!");
    }

    if(form.lastname.value == "") {
    	errors.push("Last Name field is empty!");
    }

    if(form.username.value == "") {
   	   errors.push("Username field is empty!");
    }
    
    var re=/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.{,8})/i;
    if(form.password.value == "") {
       errors.push("Password field is empty!");
    }

    else if(!re.test(form.password.value)) {
        	errors.push("password input contains invalid characters!");
    }
     
    if (errors.length>0){
    	var msg="Errors:\n\n";
    	for (var i=0; i<errors.length; i++){
    		msg+=errors[i] + "\n";
    	}
    	alert (msg);
    	return false;
    }
    //validation was successful
    return true;
};
     
