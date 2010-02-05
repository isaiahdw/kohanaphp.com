$(document).ready(function(){
	
	// redefine cycle's updateActivePagerLink
	$.fn.cycle.updateActivePagerLink = function(pager, currSlideIndex) { 
		$(pager).find('li').removeClass('active') 
			.filter('li:eq('+currSlideIndex+')').addClass('active'); 
	}; 
	
	$('#slides').cycle({
		fx:      'fade',
		speed:   'fast',
		timeout: '8000',
		pager:   '#pager',
		//pagerEvent: 'mouseover',
		pauseOnPagerHover: true,
		pagerAnchorBuilder: function(idx,slide) {
			// return selector string for an existing anchor
			return '#pager li:eq(' + idx + ') h3 a';
		},
		after: function(curr, next, opts) {
			var index = opts.currSlide;
			$('#page li:eq(' + index + ')').addClass('active');
		},

	});
	
});