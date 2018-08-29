//definido as funcoes
function perguntar() {
  let numero1 = prompt("Primeiro numero ? ");
  let numero2 = prompt("Segundo numero ? ");
  let confirma  = confirm('São esses numeros' + numero1 + ' e ' + numero2);

  if (confirma) {
    let numeroMaior = (parseInt(numero1) > parseInt(numero2)
    ?numero1
    :numero2);
    alert('Numero maior é ' + numeroMaior);
  } else { perguntar() }
}
//Usando as funcoes
perguntar();
