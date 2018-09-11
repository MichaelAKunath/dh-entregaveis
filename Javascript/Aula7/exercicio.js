//Incializacao das variaveis que serão usadas no programa
let n = 0  //incializacao de variavel na entrada

//Funcoes
function alertar() {
  let alerta='aviso'

  alert(alerta)
}
function mudacor() {
  let cor1 = "red"
  let cor2 = "blue"
  if (document.body.style.background === "red") {
      document.body.style.background = cor2
     } else {
      document.body.style.background = cor1
   }
}


function cliquenumero() {

  let texto = ''
  n += 1
  texto = 'estou no click ' + n
  mensagem.innerHTML = texto

}

function para()
{
  confirma.removeEventListener('click',processa)
}

function continua()
{
  confirma.addEventListener('click',processa)
}

function processa()
{
  alertar()
  mudacor()
  cliquenumero()
}

//acoes que chamam as funcoes
confirma.addEventListener('click',processa)
//confirma.addEventListener('click',function(){mudacor()})
//confirma.addEventListener('click',function(){cliquenumero()})
parar.addEventListener('click',para)//function(){confirma.removeEventListener('click',continua)})
continuar.addEventListener('click',continua)
//confirma.onclick = mudacor
console.log(confirma)
