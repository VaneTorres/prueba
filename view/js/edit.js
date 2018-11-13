var connect, result, from, proceso,description,presupuesto,date,select,options;
//Coloca fecha actual
window.onload = function(){
    var fecha=new Date(),
        text=document.getElementById('date');
    text.value = fecha.getDate()+"/"+(fecha.getMonth()+1)+"/"+fecha.getFullYear();
}
function formulario(e) {
    proceso = document.getElementById('process').value;
    description =document.getElementById('description').value;
    presupuesto = document.getElementById('presupuesto').value;
    date = document.getElementById('date').value;
    select=document.getElementById('sede');
    options=select.options[select.selectedIndex].text;

        from = 'process=' + proceso + '&description=' + description + '&presupuesto=' + presupuesto + '&date=' + date + '&option=' + options;
        connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        connect.onreadystatechange = function () {
            if (connect.readyState == 4 && connect.status == 200) {
                if(connect.responseText == 1){
                    result = "<div class='alert alert-dismissible alert-success'>";
                    result += " <strong>Modificado!</strong>";
                    result += "<a > Estamos redireccionandote.</a>";
                    result += "</div>";
                    document.getElementById('_AJAX_').innerHTML = result;
                }else {
                    document.getElementById('_AJAX_').innerHTML = connect.responseText;
                }
            }else  if (connect.readyState != 4)  {
                result = "<div class='alert alert-dismissible alert-warning'>";
                result += "<strong>Procesando..</strong>";
                result += "<a > Estamos intentando registrar el proceso.</a>";
                result += "</div>";
                document.getElementById('_AJAX_').innerHTML = result;
            }
        };
        connect.open('POST', 'ajax.php?mode=edit', true);
        connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        connect.send(from);

    e.preventDefault();
};
var btn=document.getElementById('btn-create');
btn.addEventListener("click",formulario);


