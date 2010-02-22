$(document).ready(function(){

	// redefine cycle's updateActivePagerLink
<<<<<<< HEAD
	$.fn.cycle.updateActivePagerLink = function(pager, currSlideIndex) {
		$(pager).find('li').removeClass('active')
			.filter('li:eq('+currSlideIndex+')').addClass('active');
	};

	$('#slides').cycle({
		fx:      'fade',
		speed:   'fast',
		timeout: '12000',
		pager:   '#pages',
=======
	$.fn.cycle.updateActivePagerLink = function(pager, currSlideIndex) { 
		$(pager).find('li').removeClass('active') 
			.filter('li:eq('+currSlideIndex+')').addClass('active'); 
	}; 
	
	$('#cycle-slides').cycle({
		fx:      'fade',
		speed:   'fast',
		timeout: '8000',
		pager:   '#cycle-tabs',
>>>>>>> remotes/bluehawk/master
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