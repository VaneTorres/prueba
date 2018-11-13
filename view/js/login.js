var user, password,formlogin,connect;
var btn=document.getElementById('btn-login');
btn.addEventListener("click",login);
function login(e) {
    user=document.getElementById('user').value;
    password=document.getElementById('pass').value;
    if(user!=''&& password !=''){
        formlogin='users='+user+'&password='+password;
        connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        connect.onreadystatechange = function () {
            if (connect.readyState == 4 && connect.status == 200) {

                if(connect.responseText == 1){
                    result = "<div class='alert alert-dismissible alert-success'>";
                    result += " <strong>Ingresando!</strong>";
                    result += "<a > Estamos redireccionandote.</a>";
                    result += "</div>";
                    document.getElementById('_AJAX_').innerHTML = result;
                    location.href="?view=form";
                }else{
                    document.getElementById('_AJAX_').innerHTML = connect.responseText;
                }
            }else {
                result = "<div class='alert alert-dismissible alert-warning'>";
                result += "<strong>Procesando..</strong>";
                result += "<a > Estamos intentando registrar el proceso.</a>";
                result += "</div>";
                document.getElementById('_AJAX_').innerHTML = result;
            }

        };
        connect.open('POST', 'ajax.php?mode=formlogin', true);
        connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        connect.send(formlogin);
    }else {
        result = "<div class='alert alert-dismissible alert-danger'>";
        result += "<strong>ERROR!</strong>"
        result +="<a > Todos los campos deben ser registrados.</a>";
        result += "</div>";
        document.getElementById('_AJAX_').innerHTML = result;
    }
    e.preventDefault();
}