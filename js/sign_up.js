 function sign_in() {
       
        $.ajax({
        dataType : "json",
        type : "POST",
        data : {
            g_username : $('#username').val(),
            g_pwd : $('#password').val()
        },
       url : 'services/adj_admn_login.php',

        success : function(response) {
            var id = response.id;
			if(id>0){
				window.location.assign("dashboard.php")
      		}
      		else{
      			alert('Invalid Username/Password!');
      			$('#username').val("");
      			$('#password').val("");
      		}
        }
    });
}
