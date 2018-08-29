function elevaraoSegundo(num1,num2) {
   let Resultado = num1 ** num2;
   return Resultado;
}
let quadrado = function(num1,num2) {
   Resultado = num1 ** num2;
   return Resultado;
}

console.log(elevaraoSegundo(5,2))
console.log(quadrado(7,2))

function atribuicao() {
 var numero = 5;
 return(numero);
}
console.log(atribuicao())

function trianguloRetangulo(num1,num2)
{ let hipotenusa = (num1 ** 2 + num2 **2) ** (1/2)
  let Perimetro  = hipotenusa + num1 + num2
  return(hipotenusa,Perimetro)
}
console.log(trianguloRetangulo(3,4))

function MeuSanduiche(ingr1,ingr2,callback){

  console.log('Estou comendo um sanduiche de : ' + ingr1 + ' com ' + ingr2)
  setTimeout(function(){callback()},3000)
}
function TermineideComer(){
  console.log('Terminei de comer !!')
}

MeuSanduiche('Presunto','tomate',TermineideComer)
//Arrays
//exercicio 1
let array = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
//exercicio 2
function sqrt(array) {
  let resultado = array.map(function(numero){
    let raiz = Math.sqrt(numero);
    return raiz
  })
  console.log(resultado)
}
sqrt(array)
