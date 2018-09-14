import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';

class App extends Component {
  constructor() {
    super();

    this.state = {
      lista: [],
      item: ''
    };
  }

  adicionarItem () {
    const arr = [
      ...this.state.lista,
      this.state.item
      //aqui vem o valor do Input
    ];
    this.setState({
      lista:arr

    })
  }

  incluirItem(event) {
    this.setState({item:event.target.value})
  }
  render() {
    return (
      <div>
        <h1>To do List</h1>
        <input type="text" name="item" onChange={this.incluirItem.bind(this)}/>
        <button title = "adicionar" onClick={this.adicionarItem.bind(this)}>
        adicionar
        </button>
        <ul>
          {
            this.state.lista.map((item,index) =>
              <li key={index}>{item}</li>
            )
          }
        </ul>
      </div>
    )
  }
}

export default App;
