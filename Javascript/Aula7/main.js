
  /*
  fetch('https//jsonplaceholder.typicode.com/posts')
     .then(function(response){
       response.json().then(function(dados){
          console.log(dados)
       })
   })
   */
function mostrarNaTela (dados){
  /*
  dados.forEach(function (post){
    let conteudo = ''
    let title = post.title
    let body  = post.body
    conteudo = conteudo + '<h2>' + title + '</h2>'
    conteudo = conteudo + '<p>' + body + '</p>'
  })
  */
  let conteudo = dados.map(postagem =>
   '<h2>' + postagem.title + '</h2>' + '<p>' + postagem.title +' </p>')
  document.body.innerHTML = conteudo.join('<hr>')
  //console.log(dados)
}

   fetch('https://jsonplaceholder.typicode.com/posts')
      .then((response) => response.json())
      .then(mostrarNaTela)
