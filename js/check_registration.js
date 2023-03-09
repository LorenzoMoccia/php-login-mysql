document.getElementById("register-form").addEventListener("submit", function(event) {
    // Previene il comportamento predefinito del form
    event.preventDefault();
  
    // Effettua la verifica AJAX
    var xhttp = new XMLHttpRequest();
    var username = document.getElementById("InputUsername").value;
    var email = document.getElementById("InputEmail").value;
  
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        if (this.responseText == "username_exists") {
          document.getElementById("username-error").innerHTML = "Username già in uso.";
        } else if (this.responseText == "email_exists") {
          document.getElementById("username-error").innerHTML = "Email già in uso.";
        } else {
          // Se la verifica è andata a buon fine, invia i dati del form al server
          document.getElementById("register-form").submit();
        }
      }
    };
  
    xhttp.open("POST", "php/check_username.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("username=" + username + "&email=" + email);
  });

  
  