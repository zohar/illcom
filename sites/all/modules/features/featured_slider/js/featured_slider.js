Drupal.behaviors.featured_slider = function(context) {
	$('#featured-slider').anythingSlider({
		buildArrows: false,
		playRtl: true,
		delay: 7000,
		autoPlay:true,
		startText           : Drupal.t('התחל'),   // Start button text
		stopText            : Drupal.t('עצור'),
	});
	$('.featured-slide').click(function(){
		$('#featured-slider').data('AnythingSlider').startStop(); 
	});

};
