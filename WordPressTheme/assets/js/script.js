
// スムーススクロール
jQuery('a[href^="#"]').click(function() {
	let header = jQuery(".l-header").innerHeight();
	let speed = 300;
	let id = jQuery(this).attr("href");
	let target = jQuery("#" == id ? "html" : id);
	let position = jQuery(target).offset().top - header;
   jQuery("html, body").animate({scrollTop: position},speed);
	
   return false;
  });
  

// topに戻るボタン

var show = jQuery(".p-mv").offset();
jQuery('.p-footer__btn').hide();
jQuery(window).scroll(function() {
if(jQuery(this).scrollTop() > show.top) {
jQuery('.p-footer__btn').fadeIn();
} else {
jQuery('.p-footer__btn').fadeOut();
	}
});
jQuery('.p-footer__btn').click(function(){
jQuery('html, body').animate({scrollTop: 0}, 500);

});

// スムーススクロール絶対パス
jQuery(function(jQuery) {
	jQuery('a[href*=#]').click(function(){
		var header = jQuery(".l-header").innerHeight();
		var speed = 500;
		var href= jQuery(this).attr('href');
		var url = location.protocol + '//' + location.hostname + location.pathname;
		href = href.replace(url, '');
		var target = jQuery(href == '#' || href == '' ? 'html' : href);
		if( target.size() < 1 ) return true;
		var position = jQuery(target).offset().top - header;
		jQuery('html, body').animate({scrollTop:position}, speed, 'swing');
		jQuery('.p-header_nav').removeClass('open');
		return false;
	});
  });





// jQuery( window ).on( 'scroll', function() {
// if ( 100 < jQuery( this ).scrollTop() ) { 
//   jQuery( '.j-header' ).addClass( 'change-color' );
// } else {
//   jQuery( '.j-header' ).removeClass( 'change-color' );
// }
// });


// ドロワーメニュー
jQuery('.p-header_hamburger , .p-header_nav-background').on('click' , function(e){
	e.preventDefault();
	
	jQuery('.p-header_nav').toggleClass('open');
	jQuery('.p-header_nav-background').toggleClass('open');
	jQuery('.p-header_nav-close').toggleClass('open');
	jQuery('.p-header_hamburger').toggleClass('active');
	return false;
	});
	jQuery('.p-header_nav ul li a[href]').on('click', function(event) {
		jQuery('.p-header_hamburger').trigger('click');
	});

	