// $('.crsl').cycle({
// 	fx: 'fade',
// 	speed: 3000
// });
$(document).ready(function(){
	 Galleria.loadTheme('js/galleria/themes/classic/galleria.classic.min.js');
	 Galleria.configure({
	 	transition:'fade',
	 	thumbnails:false,
	 	autoplay:3000,
	 	showInfo:false,
	 	transitionSpeed: 1500,
	 	extend:function(){
	 		var gallery = this;
			 $('.crsl').hover(
				function(){
					gallery.pause();
					console.log('paused');
				},
				function(){
					gallery.play();
					console.log('played');
				}
			);
	 	}
	 });
	 Galleria.run('.crsl');
});