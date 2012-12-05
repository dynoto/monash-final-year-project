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
	 	showInfo:false
	 });
	 Galleria.run('.crsl');
});