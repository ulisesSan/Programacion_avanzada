
function multi() {
  var n1=Number(document.getElementById('s1').value);
  var p1=document.getElementById('p10').innerHTML;
  var res1=n1*p1;
  var n2=Number(document.getElementById('s2').value);
  var p4=document.getElementById('p13').innerHTML;
  var res2=n2*p4;
  var n3=Number(document.getElementById('s3').value);
  var p7=document.getElementById('p16').innerHTML;
  var res3=n3*p7;


  var n4=Number(document.getElementById('e1').value);
  var p2=document.getElementById('p11').innerHTML;
  var res4=n4*p2;
  var n5=Number(document.getElementById('e2').value);
  var p5=document.getElementById('p14').innerHTML;
  var res5=n5*p5;
  var n6=Number(document.getElementById('e3').value);
  var p8=document.getElementById('p17').innerHTML;
  var res6=n6*p8;
  var t=res1+res2+res3+res4+res5+res6;

  var n7=Number(document.getElementById('r1').value);
  var p3=document.getElementById('p12').innerHTML;
  var res7=n7*p3;
  var n8=Number(document.getElementById('r2').value);
  var p6=document.getElementById('p15').innerHTML;
  var res8=n8*p6;
  var n9=Number(document.getElementById('r3').value);
  var p9=document.getElementById('p18').innerHTML;
  var res9=n9*p9;
  var to=res7+res8+res9;

  if (n1===0 && n2===0 && n3===0 && n4===0 && n5===0 && n6===0 && n7===0 && n8===0 && n9===0) {
    swal.fire({
      title: "No hay productos a comprar",
      icon: 'error'
    });
  }else {
    swal.fire({
      title: "Felicidades por su compra¡",
      icon: 'success'
    });
    document.getElementById('t1').value=t;
    document.getElementById('re').value=to;
    document.getElementById('res').value=t+to;

    document.getElementById('tabla').style.display="block";
  }
}function m() {
  document.getElementById('tabla').style.display="none";
}

