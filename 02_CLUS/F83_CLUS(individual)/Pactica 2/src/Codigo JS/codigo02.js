var obtVar = function (){
    var huevo = document.getElementById("huevo").value*45;
    var jamon = document.getElementById("jamon").value*45;
    var milaneza = document.getElementById("milaneza").value*45;
    var pollo = document.getElementById("pollo").value*45;
    var coca = document.getElementById("coca").value*18;
    var limon = document.getElementById("limon").value*20;
    var horcha = document.getElementById("horcha").value*20;
    var tortasVendidas = []; 
    var ventaBebida = [];
    var ticket = [];
    var i=0;
    var total = 0;
    var totalBeb;
    var ven =0;
    var vens=0;

    var productos=[];
    var venta = [];
    var tortas = [huevo,jamon,milaneza,pollo];
    var bebidas = ["Coca-Cola","A de Limon","A de Horchata"];
    var beb = [coca,limon,horcha];
    var totbeb = [];
    var prod = ["Huevo","Jamon","Milaneza","Pollo"];

    var conf = true;//confirm("¿Está seguro de su pedido?");
    if(conf ==true){
        if(huevo == 0 && jamon == 0 && milaneza == 0 && pollo == 0){
            alert("No está pidiendo ninguna torta");
        }
        else{
            
        
        total= huevo+jamon+milaneza+pollo + coca+ limon+horcha;
            
            
            /*for(var i=0; i<= prod.length&& i<=tortas.length; i++){
                if(tortas[i] != 0){
                    tortasVendidas.push(prod[i])[i];
                    venta.push(tortas[i])[i];
                    ven += tortas[i]*45;
                    
                    if(i==0){
                        if(bebidas[i] == "Coca-Cola"){
                            vens += beb[i]
                            ventaBebida.push(beb[i]*18)[i]; 
                            console.log(ventaBebida);
                            console.log("si entro");
                        }
                        else{
                            totbeb.push(beb[i]*20);
                            ventaBebida[i]=bebidas[i];
                            vens += beb[i];
                            console.log("si entro");
                        }
                    }
                }
                ticket[i]= venta[i],tortasVendidas[i],totbeb[i], ventaBebida[i];
                
            }*/
            
        }
    }
    else{
        alert("Operacion cancelada por el usuario");
    }
    document.getElementById("total").innerHTML= "$"+total; 
}