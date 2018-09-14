import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import Botao from './Botao';
import Entrada from './Entrada';

class App extends Component {
  constructor() {
    super();

    this.state = {
      lista: [],
      item: ''
    };
  }

 adicionarItem () {
   const novoArray = [
     ...this.state.lista,
     this.state.entrada
      ]
   this.setState({
         lista:novoArray
       })
 }

 incluirItem(event) {
     this.setState({entrada:event.target.value})
   }

  render() {
    console.log(this.state)
    return (
      <div>
      <h1>To do List</h1>
      <Entrada name="entrada" incluirItem={this.incluirItem.bind(this)}/>
      <Botao title="Adicionar" adicionarItem={this.adicionarItem.bind(this)}/>

      <ul>
          {
            this.state.lista.map(item =>
              <li>{item}</li>
            )
          }
      </ul>
    </div>
    );
  }
}

export default App;
