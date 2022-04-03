import React, {Component} from 'react';

import Header from './template/Header';
import Body from './template/Body';

class App extends Component {
	render() {
		return (
			<div id='app' className='h-screen overflow-x-hidden'>
				<Header />
				<Body />
			</div>
		);
	}
}

export default App;
