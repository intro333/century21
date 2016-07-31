/*JavaScript for project*/

	function submitForm() {

		//values
		var token = $('#_token').prop('value');
		var responseData = document.getElementById('responseData');
		var name = document.getElementById('InputFIO').value;
		var email = document.getElementById('InputEmail').value;
		var phone = document.getElementById('InputPhone').value;
		var sex = document.getElementById('InputSex').value;
		var birthday = document.getElementById('InputBirthday').value;
		var events = $('#InputEvents').val();

		function isValidEmailAddress(emailAddress) {
    	var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    	return pattern.test(emailAddress);
    	}

    	if(name == '') {
    		alert("Field Full name is empty!");
    	} else if(!isValidEmailAddress(email)) {
    		alert("Wrong Email!");
    	} else if(events == '') {
    		alert("Field Events is empty!");
    	} else {
			var xhttp;
			xhttp = new XMLHttpRequest();
			xhttp.open("POST", "sending_data?_token="+token+"&name="+name+"&email="+email+"&phone="+phone+"&sex="+sex+"&birthday="+birthday+"&events="+events, true);
	  		xhttp.send();

	  		xhttp.onreadystatechange = function() {
	    		if (xhttp.readyState == 4 && xhttp.status == 200) {
	    			var showName = document.createElement("p");
	        		showName.innerHTML = "ФИО: " + name;

	        		var showEmail = document.createElement("p");
	        		showEmail.innerHTML = "Email: " + email;

	        		var showPhone = document.createElement("p");
	        		showPhone.innerHTML = "Phone Number: " + phone;

	        		var showSex = document.createElement("p");
	        		showSex.innerHTML = "Sex: " + sex;

	        		var showBirthday = document.createElement("p");
	        		showBirthday.innerHTML = "Birthday: " + birthday;

	        		var showEvents = document.createElement("p");
	        		showEvents.innerHTML = "Events: " + events;

					responseData.appendChild(showName);
	        		responseData.appendChild(showEmail);
	        		responseData.appendChild(showPhone);
	        		responseData.appendChild(showSex);
	        		responseData.appendChild(showBirthday);
	        		responseData.appendChild(showEvents);
	    		}
	    	}
		}
	}

	function goToAdminPanel() {
		document.location.href = '/admin';
	}

	function goToRegisterUser() {
		document.location.href = '/';
	}