document.getElementById("login-form").addEventListener("submit", function(event) {
    // Previene il comportamento predefinito del form
    event.preventDefault();

    // Effettua la verifica AJAX
    var xhttp = new XMLHttpRequest();
    var username = document.getElementById("InputUsername").value;
    var password = document.getElementById("InputPassword").value;

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
            if (this.status == 200) {
                if (this.responseText == "success") {
                    // Login riuscito
                    window.location.href = "../dashboard.php";
                } else {
                    // Login fallito
                    document.getElementById("login-error").innerHTML = "Credenziali errate. Riprova.";
                }
            } else {
                // Errore nella richiesta AJAX
                var errorMessage = "Errore durante la verifica AJAX. Status code: " + this.status;
                console.error(errorMessage);
                alert(errorMessage);
            }
        }
    };

    xhttp.open("POST", "check_login.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("username=" + username + "&password=" + password);
});
