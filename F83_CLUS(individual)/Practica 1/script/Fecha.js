function fecha(){
    const fecha = new Date();
    const año = fecha.getFullYear();
    const mes = fecha.getMonth() +1;
    const dia = fecha.getDate();
    let fechaCompleta = año +' '+mes+' '+dia;
    const dateActual = document.getElementsByName("fecha")
    
    console.log(fechaCompleta);
  
    dateActual.textContent = `${dia} ${mes} ${año}`;
}
