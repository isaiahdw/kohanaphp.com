$(document).ready(function(){
			
	// redefine cycle's updateActivePagerLink
	$.fn.cycle.updateActivePagerLink = function(pager, currSlideIndex) { 
		$(pager).find('li').removeClass('active') 
			.filter('li:eq('+currSlideIndex+')').addClass('active'); 
	}; 
	
	$('#cycle-slides').cycle({
		fx:      'fade',
		speed:   'fast',
		timeout: '8000',
		pager:   '#cycle-tabs',
		//pagerEvent: 'mouseover',
		pauseOnPagerHover: true,
		pagerAnchorBuilder: function(idx,slide) {
			// return selector string for an existing anchor
			return '#cycle-tabs li:eq(' + idx + ') a';
		},
		after: function(curr, next, opts) {
			var index = opts.currSlide;
			$('#cycle-tabs li:eq(' + index + ')').addClass('active');
		}
	});
	
});