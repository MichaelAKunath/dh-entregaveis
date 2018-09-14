import React, { Component } from 'react';

class Entrada extends Component {

  render() {
    return (
    <input type="text" name={this.props.name} onChange={this.props.incluirItem}/>
    )
  }
}
export default Entrada;
