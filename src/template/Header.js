import React, {Component} from 'react';

import ImageLogo from './../static/image/logo.png';

function Menu(props) {
	return (
		<a href={props.href} className='items-center py-2 mx-8 link-underline text-white hover:text-amber-400'>
			<span>{props.children}</span>
		</a>
	);
}

class Header extends Component {
	render() {
		return (
			<nav className='flex items-center justify-between fixed top-0 w-full bg-zinc-800 p-2 z-50'>
				<a className='flex items-center font-bold text-4xl pr-16' href='#intro'>
					<img className='h-20 w-auto' src={ImageLogo} alt='' />
					<span className='text-white'>Korn</span>
					<span className='text-amber-400 link-underline'>Yellow</span>
					<span className='text-white'>.</span>
				</a>
				<div className='text-2xl font-bold text-white'>
					<Menu href='#about'>About</Menu>
					<Menu href='#portfolio'>Portfolio</Menu>
					<Menu href='#works'>Works</Menu>
					<Menu href='#contact'>Contact</Menu>
				</div>
			</nav>
		);
	}
}

export default Header;
