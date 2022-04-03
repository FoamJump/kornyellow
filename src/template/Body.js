import React, {Component} from 'react';

import About from './../content/About';
import Portfolio from './../content/Portfolio';
import Works from './../content/Works';
import Contact from './../content/Contact';

class Body extends Component {
	render() {
		return (
			<div className='relative w-full top-[96px] snap-y snap-mandatory h-[calc(100vh-96px)] overflow-y-scroll scrollbar-hide scroll-smooth'>
				<About />
				<Portfolio />
				<Works />
				<Contact />
			</div>
		);
	}
}

export default Body;
