
const HORA = () => {

    // Constante que almacena el id del elemento donde
    // se va a mostrar el reloj
    const ID_ELEMENT = document.getElementById("reloj");
  
    // Función que añade un cero a la izquierda
    // a la hora, minutos y segundos cuando el
    // valor de estos es inferior a 10
    const CERO = n => n = n < 10 ? "0"+n: n;
    let hora, minutos, segundos,dia,mes,año;
    console.log("si entro")
    // Funcion que retorna el Reloj
    const RELOJ = () => {
        const DATE = new Date();
        hora = DATE.getHours();
        minutos = DATE.getMinutes();
        segundos = DATE.getSeconds();
        dia= DATE.getDate();
        mes=DATE.getMonth() +1;
        año=DATE.getFullYear();
  
        return (
            ID_ELEMENT.textContent =
            `${CERO(hora)}:${CERO(minutos)}:${CERO(segundos)+ " " +"Fecha: "+ dia +"/" + mes +"/" + año}`
        );
    }
  
    // Llama a la función RELOJ cada segundo
    // para que se vaya actualizando la hora
    return setInterval(RELOJ, 1000);
}

  
 