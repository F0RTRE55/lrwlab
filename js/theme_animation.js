function scrollMainBanner() {
	var scrollTop = $(window).scrollTop();
	var windowHeight = $(window).height();

	$('.main-banner__scroll').each(function(index) {
		var elementTop = $(this).offset().top;

		if (scrollTop + windowHeight > elementTop && scrollTop < elementTop + $(this).outerHeight()) {
			var delay = index * 150; // 각 요소마다 200ms씩 딜레이 적용

			setTimeout(() => {
				$(this).css({
					'opacity': '1',
					'transform': 'translateY(0)'
				});
			}, delay);
		}
	});
}

$(window).on('load', function() {
	scrollMainBanner();
});

$(window).on('scroll', function() {
	scrollMainBanner();
});


function scrollMainChart() {
	var scrollTop = $(window).scrollTop();
	var windowHeight = $(window).height();

	$('.main-chart__scroll').each(function(index) {
		var elementTop = $(this).offset().top;

		if (scrollTop + windowHeight > elementTop && scrollTop < elementTop + $(this).outerHeight()) {
			var delay = index * 150; // 각 요소마다 200ms씩 딜레이 적용

			setTimeout(() => {
				$(this).css({
					'opacity': '1',
					'transform': 'translateY(0)'
				});
			}, delay);
		}
	});
}

$(window).on('load', function() {
	scrollMainChart();
});

$(window).on('scroll', function() {
	scrollMainChart();
});


function scrollMainGraph() {
	var scrollTop = $(window).scrollTop();
	var windowHeight = $(window).height();

	$('.main-graph__scroll').each(function(index) {
		var elementTop = $(this).offset().top;

		if (scrollTop + windowHeight > elementTop && scrollTop < elementTop + $(this).outerHeight()) {
			var delay = index * 150; // 각 요소마다 200ms씩 딜레이 적용

			setTimeout(() => {
				$(this).css({
					'opacity': '1',
					'transform': 'translateY(0)'
				});
			}, delay);
		}
	});
}

$(window).on('load', function() {
	scrollMainGraph();
});

$(window).on('scroll', function() {
	scrollMainGraph();
});


function scrollProblemTxt() {
	var scrollTop = $(window).scrollTop();
	var windowHeight = $(window).height();

	$('.main-problem__scroll-txt').each(function(index) {
		var elementTop = $(this).offset().top;

		if (scrollTop + windowHeight > elementTop && scrollTop < elementTop + $(this).outerHeight()) {
			var delay = index * 150; // 각 요소마다 200ms씩 딜레이 적용

			setTimeout(() => {
				$(this).css({
					'opacity': '1',
					'transform': 'translateY(0)'
				});
			}, delay);
		}
	});
}

$(window).on('load', function() {
	scrollProblemTxt();
});

$(window).on('scroll', function() {
	scrollProblemTxt();
});


function scrollProblemImg() {
	var scrollTop = $(window).scrollTop();
	var windowHeight = $(window).height();

	$('.main-problem__scroll-img').each(function(index) {
		var elementTop = $(this).offset().top;

		if (scrollTop + windowHeight > elementTop && scrollTop < elementTop + $(this).outerHeight()) {
			var delay = index * 150; // 각 요소마다 200ms씩 딜레이 적용

			setTimeout(() => {
				$(this).css({
					'opacity': '1',
					'transform': 'translateX(0)'
				});
			}, delay);
		}
	});
}

$(window).on('load', function() {
	scrollProblemImg();
});

$(window).on('scroll', function() {
	scrollProblemImg();
});


function scrollSolutionTxt() {
	var scrollTop = $(window).scrollTop();
	var windowHeight = $(window).height();

	$('.main-solution__scroll-txt').each(function(index) {
		var elementTop = $(this).offset().top;

		if (scrollTop + windowHeight > elementTop && scrollTop < elementTop + $(this).outerHeight()) {
			var delay = index * 100; // 각 요소마다 200ms씩 딜레이 적용

			setTimeout(() => {
				$(this).css({
					'opacity': '1',
					'transform': 'translateY(0)'
				});
			}, delay);
		}
	});
}

$(window).on('load', function() {
	scrollSolutionTxt();
});

$(window).on('scroll', function() {
	scrollSolutionTxt();
});


function scrollSolutionGrid() {
	var scrollTop = $(window).scrollTop();
	var windowHeight = $(window).height();

	$('.main-solution__scroll-grid').each(function(index) {
		var elementTop = $(this).offset().top;

		if (scrollTop + windowHeight > elementTop && scrollTop < elementTop + $(this).outerHeight()) {
			var delay = index * 100; // 각 요소마다 200ms씩 딜레이 적용

			setTimeout(() => {
				$(this).css({
					'opacity': '1',
					'transform': 'translateY(0)'
				});
			}, delay);
		}
	});
}

$(window).on('load', function() {
	scrollSolutionGrid();
});

$(window).on('scroll', function() {
	scrollSolutionGrid();
});


function scrollCompany() {
	var scrollTop = $(window).scrollTop();
	var windowHeight = $(window).height();

	$('.main-company__scroll').each(function(index) {
		var elementTop = $(this).offset().top;

		if (scrollTop + windowHeight > elementTop && scrollTop < elementTop + $(this).outerHeight()) {
			var delay = index * 150; // 각 요소마다 200ms씩 딜레이 적용

			setTimeout(() => {
				$(this).css({
					'opacity': '1',
					'transform': 'translateY(0)'
				});
			}, delay);
		}
	});
}

$(window).on('load', function() {
	scrollCompany();
});

$(window).on('scroll', function() {
	scrollCompany();
});


function scrollCompanyTxt() {
	var scrollTop = $(window).scrollTop();
	var windowHeight = $(window).height();

	$('.company-txt__scroll').each(function(index) {
		var elementTop = $(this).offset().top;

		if (scrollTop + windowHeight > elementTop && scrollTop < elementTop + $(this).outerHeight()) {
			var delay = index * 100; // 각 요소마다 200ms씩 딜레이 적용

			setTimeout(() => {
				$(this).css({
					'opacity': '1',
					'transform': 'translateY(0)'
				});
			}, delay);
		}
	});
}

$(window).on('load', function() {
	scrollCompanyTxt();
});

$(window).on('scroll', function() {
	scrollCompanyTxt();
});


function scrollCompanyImg() {
	var scrollTop = $(window).scrollTop();
	var windowHeight = $(window).height();

	$('.company-fade__scroll').each(function(index) {
		var elementTop = $(this).offset().top;

		if (scrollTop + windowHeight > elementTop && scrollTop < elementTop + $(this).outerHeight()) {
			var delay = index * 150; // 각 요소마다 200ms씩 딜레이 적용

			setTimeout(() => {
				$(this).css({
					'opacity': '1'
				});
			}, delay);
		}
	});
}

$(window).on('load', function() {
	scrollCompanyImg();
});

$(window).on('scroll', function() {
	scrollCompanyImg();
});


function scrollProductTit() {
	var scrollTop = $(window).scrollTop();
	var windowHeight = $(window).height();

	$('.product__tit').each(function(index) {
		var elementTop = $(this).offset().top;

		if (scrollTop + windowHeight > elementTop && scrollTop < elementTop + $(this).outerHeight()) {
			var delay = index * 150; // 각 요소마다 200ms씩 딜레이 적용

			setTimeout(() => {
				$(this).css({
					'opacity': '1'
				});
			}, delay);
		}
	});
}

$(window).on('load', function() {
	scrollProductTit();
});

$(window).on('scroll', function() {
	scrollProductTit();
});


function scrollProductImg() {
	var scrollTop = $(window).scrollTop();
	var windowHeight = $(window).height();

	$('.product-info__img').each(function(index) {
		var elementTop = $(this).offset().top;

		if (scrollTop + windowHeight > elementTop && scrollTop < elementTop + $(this).outerHeight()) {
			var delay = index * 150; // 각 요소마다 200ms씩 딜레이 적용

			setTimeout(() => {
				$(this).css({
					'opacity': '1'
				});
			}, delay);
		}
	});
}

$(window).on('load', function() {
	scrollProductImg();
});

$(window).on('scroll', function() {
	scrollProductImg();
});


function scrollProductTxt() {
	var scrollTop = $(window).scrollTop();
	var windowHeight = $(window).height();

	$('.product-txt__scroll').each(function(index) {
		var elementTop = $(this).offset().top;

		if (scrollTop + windowHeight > elementTop && scrollTop < elementTop + $(this).outerHeight()) {
			var delay = index * 100; // 각 요소마다 200ms씩 딜레이 적용

			setTimeout(() => {
				$(this).css({
					'opacity': '1',
					'transform': 'translateY(0)'
				});
			}, delay);
		}
	});
}

$(window).on('load', function() {
	scrollProductTxt();
});

$(window).on('scroll', function() {
	scrollProductTxt();
});


function scrollProductPrcsTxt() {
	var scrollTop = $(window).scrollTop();
	var windowHeight = $(window).height();

	$('.prcs__scroll-txt').each(function(index) {
		var elementTop = $(this).offset().top;

		if (scrollTop + windowHeight > elementTop && scrollTop < elementTop + $(this).outerHeight()) {
			var delay = index * 100; // 각 요소마다 200ms씩 딜레이 적용

			setTimeout(() => {
				$(this).css({
					'opacity': '1',
					'transform': 'translateY(0)'
				});
			}, delay);
		}
	});
}

$(window).on('load', function() {
	scrollProductPrcsTxt();
});

$(window).on('scroll', function() {
	scrollProductPrcsTxt();
});

function scrollProductPrcs() {
	var scrollTop = $(window).scrollTop();
	var windowHeight = $(window).height();

	$('.prcs__scroll').each(function(index) {
		var elementTop = $(this).offset().top;

		if (scrollTop + windowHeight > elementTop && scrollTop < elementTop + $(this).outerHeight()) {
			var delay = index * 100; // 각 요소마다 200ms씩 딜레이 적용

			setTimeout(() => {
				$(this).css({
					'opacity': '1',
					'transform': 'translateY(0)'
				});
			});
		}
	});
}

$(window).on('load', function() {
	scrollProductPrcs();
});

$(window).on('scroll', function() {
	scrollProductPrcs();
});



function scrollProductItem() {
	var scrollTop = $(window).scrollTop();
	var windowHeight = $(window).height();

	$('.item__scroll').each(function(index) {
		var elementTop = $(this).offset().top;

		if (scrollTop + windowHeight > elementTop && scrollTop < elementTop + $(this).outerHeight()) {
			var delay = index * 100; // 각 요소마다 200ms씩 딜레이 적용

			setTimeout(() => {
				$(this).css({
					'opacity': '1',
					'transform': 'translateY(0)'
				});
			}, delay);
		}
	});
}

$(window).on('load', function() {
	scrollProductItem();
});

$(window).on('scroll', function() {
	scrollProductItem();
});



function scrollNoticeTit() {
	var scrollTop = $(window).scrollTop();
	var windowHeight = $(window).height();

	$('.notice-fade__scroll').each(function(index) {
		var elementTop = $(this).offset().top;

		if (scrollTop + windowHeight > elementTop && scrollTop < elementTop + $(this).outerHeight()) {
			var delay = index * 100; // 각 요소마다 200ms씩 딜레이 적용

			setTimeout(() => {
				$(this).css({
					'opacity': '1'
				});
			});
		}
	});
}

$(window).on('load', function() {
	scrollNoticeTit();
});

$(window).on('scroll', function() {
	scrollNoticeTit();
});


function scrollNoticeList() {
	var scrollTop = $(window).scrollTop();
	var windowHeight = $(window).height();

	$('.notice-list__scroll').each(function(index) {
		var elementTop = $(this).offset().top;

		if (scrollTop + windowHeight > elementTop && scrollTop < elementTop + $(this).outerHeight()) {
			var delay = index * 100; // 각 요소마다 200ms씩 딜레이 적용

			setTimeout(() => {
				$(this).css({
					'opacity': '1',
					'transform': 'translateY(0)'
				});
			});
		}
	});
}

$(window).on('load', function() {
	scrollNoticeList();
});

$(window).on('scroll', function() {
	scrollNoticeList();
});



function scrollNoticeView() {
	var scrollTop = $(window).scrollTop();
	var windowHeight = $(window).height();

	$('.notice-v-fade__scroll').each(function(index) {
		var elementTop = $(this).offset().top;

		if (scrollTop + windowHeight > elementTop && scrollTop < elementTop + $(this).outerHeight()) {
			var delay = index * 100; // 각 요소마다 200ms씩 딜레이 적용

			setTimeout(() => {
				$(this).css({
					'opacity': '1'
				});
			});
		}
	});
}

$(window).on('load', function() {
	scrollNoticeView();
});

$(window).on('scroll', function() {
	scrollNoticeView();
});




function scrollContactTit() {
	var scrollTop = $(window).scrollTop();
	var windowHeight = $(window).height();

	$('.contact-fade__scroll').each(function(index) {
		var elementTop = $(this).offset().top;

		if (scrollTop + windowHeight > elementTop && scrollTop < elementTop + $(this).outerHeight()) {
			var delay = index * 100; // 각 요소마다 200ms씩 딜레이 적용

			setTimeout(() => {
				$(this).css({
					'opacity': '1'
				});
			});
		}
	});
}

$(window).on('load', function() {
	scrollContactTit();
});

$(window).on('scroll', function() {
	scrollContactTit();
});


function scrollContactForm() {
	var scrollTop = $(window).scrollTop();
	var windowHeight = $(window).height();

	$('.contact__scroll').each(function(index) {
		var elementTop = $(this).offset().top;

		if (scrollTop + windowHeight > elementTop && scrollTop < elementTop + $(this).outerHeight()) {
			var delay = index * 100; // 각 요소마다 200ms씩 딜레이 적용

			setTimeout(() => {
				$(this).css({
					'opacity': '1',
					'transform': 'translateY(0)'
				});
			});
		}
	});
}

$(window).on('load', function() {
	scrollContactForm();
});

$(window).on('scroll', function() {
	scrollContactForm();
});