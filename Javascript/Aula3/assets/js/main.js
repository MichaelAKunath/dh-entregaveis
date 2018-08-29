window.onload = function(){
const elemento = document.getElementById("titular")
elemento.style.display = 'none'

const cor = document.querySelector("#lechuza")
 cor.style.filter = "grayscale(100%)"

const corvermelho = document.querySelectorAll("input")
corvermelho.forEach(function(elemento){elemento.style.background = "red"})
const corvermelhot = document.querySelectorAll("textarea")
corvermelhot.forEach(function(elemento){elemento.style.background = "red"})

const atributo = document.getElementById("copyright")
console.log(atributo.attributes)

const twitter = document.querySelector(".twitter")
console.log(twitter.getAttribute("href"))

const facebook = document.querySelector(".facebook")
console.log(facebook.getAttribute("href"))

const youtube = document.querySelector(".youtube")
console.log(youtube.setAttribute("href","https://www.youtube.com/channel/UCRQdwmWMhTcqDFjPT4UPZYA"))

const action = document.querySelector("form")
console.log(action.hasAttribute("action"))

const corrige = document.querySelector(".formulario")

corrige.removeAttribute("url")
corrige.setAttribute("action","https://br.digitalhouse.com")

const alteraCorH2 = document.querySelectorAll("H2")
alteraCorH2.forEach(function(elemento){elemento.style.color = "red"})

const alteraCorIcon = document.querySelectorAll(".icon")
alteraCorIcon.forEach(function(elemento){elemento.style.color = "green"})

}
