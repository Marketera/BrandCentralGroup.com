$(document).foundation();

var $body = $('body'),
	$GetElemByHrefHash = function(href,$parent) {
		if (!href) return $();
		if($parent && $parent.length > 0){
			return $parent.find('#'+(href.split('#')[1]));
		}
		return $('#'+(href.split('#')[1]));
	};
$body.on('click','.activatable,.activatable-tabs>a,.activatable-tabs>dd>a',function(e) {
	e.preventDefault();
	var $this = $(this),
		ActivatedClasses = 'active',
		this_href = $this.attr('href'),
		isCarousel = $this.parentsUntil('.tabset-holder').hasClass('activatable-carousel'),
		CarouselIndex,
		$parent, $siblings, $Next, $NextParentChildren;

	if ($this.parent('dd').length) $this = $this.parent('dd');
	$parent = $this.parents('.tabset-holder');
	$siblings = $this.siblings().not('.not-activatable,.clear');

	$siblings.each(function(){
		var $that = $(this),
			that_href = $that.attr('href');
		if (!that_href) that_href = $that.children('a').eq(0).attr('href');
		$that.add($GetElemByHrefHash(that_href,$parent)).removeClass(ActivatedClasses);
	});
	$Next = $GetElemByHrefHash(this_href,$parent);
	if (isCarousel) {
		$NextParentChildren = $Next.parent().children();
		console.log('INDEX',$NextParentChildren.index($Next));
		$Next.parent().css('margin-left',(-100 * $NextParentChildren.index($Next))+'%');
	}
	$this.add($Next).addClass(ActivatedClasses);
}).on('click','.activatable-next',function(e) {
	e.preventDefault();
	var $this = $(this),
		$Parent = $GetElemByHrefHash($this.attr('href')).find('.tabset-holder'),
		ActivatedClasses = 'active',
		$Current = $Parent.find('.active'),
		$Next = $Current.next();
	if (!$Parent.length) $Parent = $this.parents('.tabset-holder');
	if (!$Next.length) {
		$Next = $Parent.children().eq(0);
	}

	$Current.removeClass(ActivatedClasses);
	$Next.addClass(ActivatedClasses);
});

$('.Slideshow').each(function(){
	var $this = $(this),
		delay = $this.data('seconds') || 7,
		$Slides = $this.children(),
		Loop;
	// Nothing to do...
	if (!$Slides.length) return true;

	// Ensure one of them is selected on load
	if (!$Slides.find('.active').length) {
		$Slides.eq(0).addClass('active');
	}

	Loop = setInterval(function(){
		var $Current, $Next;
		if (!$Slides.length) {
			// Something went wrong. Stop the show!
			clearInterval(Loop);
		}
		$Current = $Slides.filter('.active');
		$Next = $Current.next();
		if (!$Next.length) $Next = $Slides.eq(0);
		$Current.add($Next).toggleClass('active');
	},delay*1000);

	$this.data('Slideshow',Loop);
});

$('.ambient-slider').each(function(){
	var autoslide = true,
		$slider = $(this),
		$slides = $slider.children(),
		$dots = $('<aside/>').addClass('ambient-slider-dots').hide().insertAfter($slider),
		currentSlide, $active, defaultSlide = 1, interval,
		slipTo = function(slideNumber) {
			if (typeof slideNumber === 'string' && !parseInt(slideNumber) && currentSlide) {
				switch (slideNumber.toLowerCase()) {
					case 'beginning':
					case 'start':
					case 'first':
						slideNumber = 1;
						break;
					case 'next':
					case 'forward':
						if (currentSlide >= $slides.length) {
							slideNumber = 1;
						} else {
							slideNumber = currentSlide + 1;
						}
						break;
					case 'prev':
					case 'previous':
					case 'back':
						if (currentSlide <= 1) {
							slideNumber = $slides.length;
						} else {
							slideNumber = currentSlide - 1;
						}
						break;
					case 'end':
					case 'last':
						slideNumber = $slides.length;
						break;
					case 'finish':
					case 'stop':
						clearInterval(interval);
						return this;
						break;
				}
			}
			if (slideNumber === currentSlide) return this;
			var slide = parseInt(slideNumber) || currentSlide || defaultSlide,
				transition = !!parseInt(slideNumber),
				$slide = $slides.eq(slide-1),
				$dot = $dots.children().eq(slide-1);
			if (!$slide.length) return this;

			if (!$active || !$active.length) $active = $slides.filter('.active');

			$slides.removeClass('pending');
			$slide.addClass('active');
			$active.addClass('pending').removeClass('active');

			$dots.children().removeClass('active');
			$dot.addClass('active');

			currentSlide = slide;
			$active = $slide;
			return this;
		};

	$slides.each(function(idx){
		$('<span/>').attr({
			href: '#'+(idx+1)
		}).hover(function(){
			slipTo(idx+1);
		},function(){}).appendTo($dots);

		$(this).click(function(e){
			if (!$(this).hasClass('active')) {
				slipTo(idx+1);
				e.preventDefault();
				return false;
			}
		});
	});
	if ($dots.children().length > 1) $dots.show();
	slipTo(defaultSlide);
	$slider.data('slider',slipTo);
	$slider.find('.deactivate-slider-spot')
		.add($dots.children())
		.add($('#cboxOverlay,#colorbox,#DemoChoice'))
		.mouseover(function(){
			autoslide = false;
		}).mouseout(function(){
			autoslide = true;
		});
	interval = setInterval(function(){
		if (autoslide) {
			slipTo('next');
		}
	},7000);
});
