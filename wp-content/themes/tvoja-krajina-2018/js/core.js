'use strict';

/* smoothscroll.min.js (polyfill) https://github.com/iamdustan/smoothscroll */!function(){"use strict";function o(o){var t=["MSIE ","Trident/","Edge/"];return new RegExp(t.join("|")).test(o)}function t(){function t(o,t){this.scrollLeft=o,this.scrollTop=t}function r(o){return.5*(1-Math.cos(Math.PI*o))}function i(o){if(null===o||"object"!=typeof o||void 0===o.behavior||"auto"===o.behavior||"instant"===o.behavior)return!0;if("object"==typeof o&&"smooth"===o.behavior)return!1;throw new TypeError("behavior member of ScrollOptions "+o.behavior+" is not a valid value for enumeration ScrollBehavior.")}function s(o,t){return"Y"===t?o.clientHeight+h<o.scrollHeight:"X"===t?o.clientWidth+h<o.scrollWidth:void 0}function c(o,t){var e=l.getComputedStyle(o,null)["overflow"+t];return"auto"===e||"scroll"===e}function n(o){var t=s(o,"Y")&&c(o,"Y"),l=s(o,"X")&&c(o,"X");return t||l}function f(o){var t;do{t=(o=o.parentNode)===e.body}while(!1===t&&!1===n(o));return t=null,o}function a(o){var t,e,i,s=(y()-o.startTime)/v;t=r(s=s>1?1:s),e=o.startX+(o.x-o.startX)*t,i=o.startY+(o.y-o.startY)*t,o.method.call(o.scrollable,e,i),e===o.x&&i===o.y||l.requestAnimationFrame(a.bind(l,o))}function p(o,r,i){var s,c,n,f,p=y();o===e.body?(s=l,c=l.scrollX||l.pageXOffset,n=l.scrollY||l.pageYOffset,f=u.scroll):(s=o,c=o.scrollLeft,n=o.scrollTop,f=t),a({scrollable:s,method:f,startTime:p,startX:c,startY:n,x:r,y:i})}if(!("scrollBehavior"in e.documentElement.style&&!0!==l.__forceSmoothScrollPolyfill__)){var d=l.HTMLElement||l.Element,v=468,h=o(l.navigator.userAgent)?1:0,u={scroll:l.scroll||l.scrollTo,scrollBy:l.scrollBy,elementScroll:d.prototype.scroll||t,scrollIntoView:d.prototype.scrollIntoView},y=l.performance&&l.performance.now?l.performance.now.bind(l.performance):Date.now;l.scroll=l.scrollTo=function(){void 0!==arguments[0]&&(!0!==i(arguments[0])?p.call(l,e.body,void 0!==arguments[0].left?~~arguments[0].left:l.scrollX||l.pageXOffset,void 0!==arguments[0].top?~~arguments[0].top:l.scrollY||l.pageYOffset):u.scroll.call(l,void 0!==arguments[0].left?arguments[0].left:"object"!=typeof arguments[0]?arguments[0]:l.scrollX||l.pageXOffset,void 0!==arguments[0].top?arguments[0].top:void 0!==arguments[1]?arguments[1]:l.scrollY||l.pageYOffset))},l.scrollBy=function(){void 0!==arguments[0]&&(i(arguments[0])?u.scrollBy.call(l,void 0!==arguments[0].left?arguments[0].left:"object"!=typeof arguments[0]?arguments[0]:0,void 0!==arguments[0].top?arguments[0].top:void 0!==arguments[1]?arguments[1]:0):p.call(l,e.body,~~arguments[0].left+(l.scrollX||l.pageXOffset),~~arguments[0].top+(l.scrollY||l.pageYOffset)))},d.prototype.scroll=d.prototype.scrollTo=function(){if(void 0!==arguments[0])if(!0!==i(arguments[0])){var o=arguments[0].left,t=arguments[0].top;p.call(this,this,void 0===o?this.scrollLeft:~~o,void 0===t?this.scrollTop:~~t)}else{if("number"==typeof arguments[0]&&void 0===arguments[1])throw new SyntaxError("Value couldn't be converted");u.elementScroll.call(this,void 0!==arguments[0].left?~~arguments[0].left:"object"!=typeof arguments[0]?~~arguments[0]:this.scrollLeft,void 0!==arguments[0].top?~~arguments[0].top:void 0!==arguments[1]?~~arguments[1]:this.scrollTop)}},d.prototype.scrollBy=function(){void 0!==arguments[0]&&(!0!==i(arguments[0])?this.scroll({left:~~arguments[0].left+this.scrollLeft,top:~~arguments[0].top+this.scrollTop,behavior:arguments[0].behavior}):u.elementScroll.call(this,void 0!==arguments[0].left?~~arguments[0].left+this.scrollLeft:~~arguments[0]+this.scrollLeft,void 0!==arguments[0].top?~~arguments[0].top+this.scrollTop:~~arguments[1]+this.scrollTop))},d.prototype.scrollIntoView=function(){if(!0!==i(arguments[0])){var o=f(this),t=o.getBoundingClientRect(),r=this.getBoundingClientRect();o!==e.body?(p.call(this,o,o.scrollLeft+r.left-t.left,o.scrollTop+r.top-t.top),"fixed"!==l.getComputedStyle(o).position&&l.scrollBy({left:t.left,top:t.top,behavior:"smooth"})):l.scrollBy({left:r.left,top:r.top,behavior:"smooth"})}else u.scrollIntoView.call(this,void 0===arguments[0]||arguments[0])}}}var l=window,e=document;"object"==typeof exports?module.exports={polyfill:t}:t()}();

var app = {
	init: function() {
		tools.backgrounds();
		tools.textareaAutoResize();
		tools.scrollTo();

		visitsCtrl.init();
		faqCtrl.init();
		subIntroCtrl.init();
		reviewsCtrl.init();
		partnersCtrl.init();
		mobileMenuCtrl.init();
		statisticsCtrl.init();
		organizeCtrl.init();
		popups.init();
		counters.init();
	}
}

var tools = {
	backgrounds: function() {

		$("[data-bg-src]").each(function() {
			var block = $(this);

			var src = block.attr('data-bg-src');
			var size = block.attr('data-bg-size');
			var pos = block.attr('data-bg-pos') || "auto";
			var repeat = "no-repeat";

			block.css({
				'background-image': 'url('+ src +')',
				'background-size': size,
				'background-position': pos,
				'background-repeat': repeat
			});
		});
	},

	scrollTo: function() {
	    // Mozilla fix
	    // $('body,html').stop(true,true).animate({scrollTop: obj.offset().top - 110}, 500);

	    $('[data-scroll-to]').on('click', function(event) {
	    	event.preventDefault();
	    	var id = $(this).attr('data-scroll-to');
	    	var offset = document.getElementById(id).offsetTop;
	    	window.scroll({ top: offset, left: 0, behavior: 'smooth' });
	    });	    
	},

	textareaAutoResize: function() {
		// $('[data-textarea]').on('keyup',function(){
		// 	var textarea = $(this);
		// 	textarea.css('height','auto');
		// 	textarea.height(this.scrollHeight);
		// });

		$(document)
		.one('focus.autoExpand', 'textarea.autoExpand', function(){
			var savedValue = this.value;
			this.value = '';
			this.baseScrollHeight = this.scrollHeight;
			this.value = savedValue;
		})
		.on('input.autoExpand', 'textarea.autoExpand', function(){
			var minRows = this.getAttribute('data-min-rows')|0, rows;
			this.rows = minRows;
			rows = Math.ceil((this.scrollHeight - this.baseScrollHeight) / 24);
			this.rows = minRows + rows;
		});
	}
}

var popups = {
	init: function() {
		var ctrl = this;
		ctrl.popups = $("[data-popup]");
		ctrl.classActive = "popup_active";
		ctrl.isOpened = false;
		ctrl.events();
	},
	open: function(popup) {
		var ctrl = this;

		ctrl.popups.filter("[data-popup='" + popup + "']").addClass(ctrl.classActive);

		ctrl.isOpened = true;
		$("body").addClass('body_overflow');
	},
	close: function() {
		var ctrl = this;

		ctrl.popups.removeClass(ctrl.classActive);
		ctrl.isOpened = false;
		$("body").removeClass('body_overflow');
	},
	events: function() {
		var ctrl = this;

		$('[data-popup-open]').on('click', function () {
			var popup = $(this).data("popup-open");
			ctrl.open(popup);
		});

		$('[data-popup-close]').on('click', function () {
			ctrl.close();
		});

		$(document).on("mouseup", function (e) {
			if (ctrl.isOpened) {
				if (!ctrl.popups.is(e.target) && ctrl.popups.has(e.target).length === 0) {
					ctrl.close();
				}
			}
		});
	}
};

var visitsCtrl = {
	init: function() {
		var ctrl = this;
		ctrl.switchers = $('[data-visits-view-switcher]');
		ctrl.switcherClassActive = "visits__switcher_active";

		ctrl.views = $('[data-visits-view]');
		ctrl.viewClassActive = "visits__view_active";

		ctrl.types = $('[data-visits-type]');
		ctrl.typeClassActive = "visit-type_active";

		ctrl.lists = $('[data-visits-list]');
		ctrl.lists.optiscroll({ forceScrollbars: true });

		ctrl.events();
	},

	events: function() {
		var ctrl = this;

		ctrl.switchers.click(function() {
			var view = $(this).attr('data-visits-view-switcher');
			ctrl.switchView(view);
		});

		ctrl.types.click(function() {
			var type = $(this).attr('data-visits-type');
			ctrl.switchType(type);
		});
	},

	switchView: function(view) {
		var ctrl = this;

		ctrl.switchers.addClass(ctrl.switcherClassActive)
		.filter('[data-visits-view-switcher="' + view + '"]').removeClass(ctrl.switcherClassActive);

		ctrl.views.removeClass(ctrl.viewClassActive)
		.filter('[data-visits-view="' + view + '"]').addClass(ctrl.viewClassActive);
	},

	switchType: function(type) {
		var ctrl = this;

		ctrl.types.removeClass(ctrl.typeClassActive)
		.filter('[data-visits-type="' + type + '"]').addClass(ctrl.typeClassActive);
	}

}

var faqCtrl = {
	init: function() {
		var ctrl = this;

		ctrl.questions = $('[data-faq-open]');
		ctrl.questionClassActive = "faq-question_active"

		ctrl.answers = $('[data-faq-answer]');
		ctrl.answerClassActive = "faq__answer_active";

		ctrl.answersContainer = $('.faq__answers');
		ctrl.answersContainerClassActive = "faq__answers_active";

		ctrl.close = $('[data-faq-close]');

		ctrl.events();

		if ($(window).width() >= 1024) {
			ctrl.selectItem(1);
		}
	},

	events: function() {
		var ctrl = this;

		ctrl.questions.click(function(event) {
			var question = $(this).attr('data-faq-open');
			ctrl.selectItem(question);
		});

		ctrl.close.click(function(event) {
			ctrl.answersContainer.removeClass(ctrl.answersContainerClassActive);
		});
	},

	selectItem: function(question) {
		var ctrl = this;

		ctrl.questions.removeClass(ctrl.questionClassActive)
		.filter('[data-faq-open="' + question + '"]').addClass(ctrl.questionClassActive);

		ctrl.answersContainer.addClass(ctrl.answersContainerClassActive);

		ctrl.answers.removeClass(ctrl.answerClassActive)
		.filter('[data-faq-answer="' + question + '"]').addClass(ctrl.answerClassActive);
	}
}

var subIntroCtrl = {
	init: function() {
		var ctrl = this;
		ctrl.container = $(".sub-intro");
		ctrl.animationState = false;
		ctrl.pointers = $('.sub-intro__pointer');
		ctrl.pointerClassAnimated = "sub-intro__pointer_animated";

		ctrl.events();
	},

	events: function() {
		var ctrl = this;

		$(window).on('scroll', function(event) {
			// console.log('$(document).scrollTop()', $(document).scrollTop());
			// console.log('$(window).height()', $(window).height());
			// console.log('ctrl.container.offset().top', ctrl.container.offset().top);
			if ( (ctrl.container.offset().top <= ( $(document).scrollTop() + (($(window).height() - ctrl.container.height())/2) ) ) &&  !ctrl.animationState ) {
				ctrl.pointerAnimation();
			}
		});
	},

	pointerAnimation: function() {
		var ctrl = this;

		ctrl.pointers.addClass(ctrl.pointerClassAnimated);

		ctrl.animationState = true;
	}
}

var reviewsCtrl = {
	init: function() {
		var ctrl = this;

		$('[data-reviews-slider]').slick({
			slidesToShow: 2,
			slidesToScroll: 2,
			infinite: true,
			prevArrow: $('[data-reviews-prev]'),
			nextArrow: $('[data-reviews-next]'),
			responsive: [
			{
				breakpoint: 1920,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
					infinite: true
				}
			},
			{
				breakpoint: 1366,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					infinite: true,
					centerMode: true,
					centerPadding: '234px'
				}
			},
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					centerPadding: '111px',
					centerMode: true,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					centerPadding: '15px',
					centerMode: true,
				}
			}

			]
		});

	}
}

var partnersCtrl = {
	init: function() {

		if ($(window).width() >= 768 && $('.partners__item').length > 3) {
			marqueeInit({
				uniqueid: 'marquee',
				style: {
					'width': 'auto',
					'height': '201px'
				},
				inc: 0, 				
				mouse: false, //mouseover behavior ('pause' 'cursor driven' or false)
				moveatleast: 1,
				neutral: 150,
				savedirection: true
			});
		}
	},

	events: function() {

	}
}

var mobileMenuCtrl = {
	init: function() {
		var ctrl = this;

		ctrl.menuButton = $('[data-menu-button]');
		ctrl.menu = $('[data-menu-mobile]');
		ctrl.events();
	},

	events: function() {
		var ctrl = this;

		ctrl.menuButton.on('click', function() {
			ctrl.menuToggle();
		});

		ctrl.menu.find('.mobile-menu__link').on('click', function(event) {
			ctrl.menuToggle();
		});
	},

	menuToggle: function() {
		var ctrl = this;

		ctrl.menuButton.toggleClass('burger_close');
		ctrl.menu.fadeToggle('400');
	}
}

var organizeCtrl = {
	init: function() {
		var ctrl = this;

		ctrl.animationState = false;
		ctrl.container = $('.organize');
		ctrl.events();
	},

	events: function() {
		var ctrl = this;

		$(window).on('scroll', function(event) {
			if ( (ctrl.container.offset().top <= ( $(document).scrollTop() + $(window).innerHeight()) ) &&  !ctrl.animationState ) {
				ctrl.container.addClass('animated');
			}
		});
	},
}

var statisticsCtrl = {
	init: function() {
		var ctrl = this;

		ctrl.animationState = false;
		ctrl.container = $('.statistics');
		ctrl.events();

	},

	events: function() {
		var ctrl = this;

		$(window).on('scroll', function(event) {
			if ( (ctrl.container.offset().top <= ( $(document).scrollTop() + $(window).innerHeight()) ) &&  !ctrl.animationState ) {
				ctrl.animation();
			}
		});
	},

	animation: function() {
		var ctrl = this;

		ctrl.animationState = true;
		counters.startCounter($('.statistics__number span'), 2000);

		setTimeout(function() {
			ctrl.container.addClass('animated');
		}, 2000)
	}	
}

var counters = {
	init: function() {
		var ctrl = this;

		$(window).on('load', function(event) {
			ctrl.startCounter($('[data-first-counter-number]'), 1500);
			ctrl.startCounter($('[data-second-counter-number]'), 2000);
		});
		
	},

	events: function() {

	},

	startCounter: function(obj, duration) {
		obj.each(function() {
			$(this).prop('Counter', 0).animate({
				Counter: $(this).text()
			}, {
				duration: duration,
				easing: 'swing',
				step: function(now) {
					var number = Math.ceil(now);
					if (number < 10) number = '0' + number;
					$(this).text(number);
				}
			});
		});
	}
}

$(document).ready(function() {
	app.init();
});