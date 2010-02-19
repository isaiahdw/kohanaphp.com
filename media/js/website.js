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
		pager:   '#pages',
		//pagerEvent: 'mouseover',
		pauseOnPagerHover: true,
		pagerAnchorBuilder: function(idx,slide) {
			// return selector string for an existing anchor
			return '#pages li:eq(' + idx + ') h3 a';
		},
		after: function(curr, next, opts) {
			var index = opts.currSlide;
			$('#pages li:eq(' + index + ')').addClass('active');
		}
	});
});