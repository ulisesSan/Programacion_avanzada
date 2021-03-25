var obtVar = function (){
    var huevo = document.getElementById("huevo").value;
    var jamon = document.getElementById("jamon").value;
    var milaneza = document.getElementById("milaneza").value;
    var pollo = document.getElementById("pollo").value;

    var conf = confirm("¿Está seguro de su pedido?");
    if(conf ==true){
        if(huevo == 0 && jamon == 0 && milaneza == 0 && pollo == 0){
            alert("No está pidiendo ninguna torta");
        }
        else{
        huevo = huevo * 45;
        jamon = jamon *45;
        milaneza = milaneza * 45;
        pollo = pollo *45;
        total= huevo+jamon+milaneza+pollo;
        document.getElementById("precio").innerHTML = total;
        }
    }
    
    else{
        alert("Operacion cancelada por el usuario");
    }
}