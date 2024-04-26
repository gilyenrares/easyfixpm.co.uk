document.addEventListener('DOMContentLoaded', () => {
	('use strict');

	/**
	 * Easy selector helper function
	 */
	const select = (el, all = false) => {
		el = el.trim();
		if (all) {
			return [...document.querySelectorAll(el)];
		} else {
			return document.querySelector(el);
		}
	};

	/**
	 * Preloader
	 */
	const preloader = document.querySelector('#preloader');
	if (preloader) {
		window.addEventListener('load', () => {
			setTimeout(() => {
				preloader.classList.add('loaded');
			}, 1000);
			setTimeout(() => {
				preloader.remove();
			}, 2000);
		});
	}
	/**
	 * Hero type effect
	 */
	const typed = select('.typed');
	if (typed) {
		let typed_strings = typed.getAttribute('data-typed-items');
		typed_strings = typed_strings.split(',');
		new Typed('.typed', {
			strings: typed_strings,
			loop: true,
			typeSpeed: 100,
			backSpeed: 50,
			backDelay: 2000,
		});
	}

	/**
	 * Mobile nav toggle
	 */
	const mobileNavShow = document.querySelector('.mobile-nav-show');
	const mobileNavHide = document.querySelector('.mobile-nav-hide');

	document.querySelectorAll('.mobile-nav-toggle').forEach(el => {
		el.addEventListener('click', function (event) {
			event.preventDefault();
			mobileNavToogle();
		});
	});

	function mobileNavToogle() {
		document.querySelector('body').classList.toggle('mobile-nav-active');
		mobileNavShow.classList.toggle('d-none');
		mobileNavHide.classList.toggle('d-none');
	}

	/**
	 * Hide mobile nav on same-page/hash links
	 */
	document.querySelectorAll('#navbar a').forEach(navbarlink => {
		if (!navbarlink.hash) return;

		let section = document.querySelector(navbarlink.hash);
		if (!section) return;

		navbarlink.addEventListener('click', () => {
			if (document.querySelector('.mobile-nav-active')) {
				mobileNavToogle();
			}
		});
	});

	/**
	 * Toggle mobile nav dropdowns
	 */
	const navDropdowns = document.querySelectorAll('.navbar .dropdown > a');

	navDropdowns.forEach(el => {
		el.addEventListener('click', function (event) {
			if (document.querySelector('.mobile-nav-active')) {
				event.preventDefault();
				this.classList.toggle('active');
				this.nextElementSibling.classList.toggle('dropdown-active');

				let dropDownIndicator = this.querySelector('.dropdown-indicator');
				dropDownIndicator.classList.toggle('bi-chevron-up');
				dropDownIndicator.classList.toggle('bi-chevron-down');
			}
		});
	});

	/**
	 * Scroll top button
	 */
	const scrollTop = document.querySelector('.scroll-top');
	if (scrollTop) {
		const togglescrollTop = function () {
			window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
		};
		window.addEventListener('load', togglescrollTop);
		document.addEventListener('scroll', togglescrollTop);
		scrollTop.addEventListener(
			'click',
			window.scrollTo({
				top: 0,
				behavior: 'smooth',
			})
		);
	}

	/**
	 * Fab button
	 */
	const fab = document.querySelector('.fab');
	if (fab) {
		const toggleFab = function () {
			window.scrollY > 100 ? fab.classList.add('active') : fab.classList.remove('active');
		};
		window.addEventListener('load', toggleFab);
		document.addEventListener('scroll', toggleFab);
	}

	/**
	 * Initiate glightbox
	 */
	const glightbox = GLightbox({
		selector: '.glightbox',
	});

	(function () {
		'use strict';
		var options = ['far-left', 'left', 'center', 'right', 'far-right', 'behind-far-right', 'behind-right', 'behind', 'behind-left', 'behind-far-left'];
		var cards = document.querySelectorAll('.carousel-card');
		addCardListeners();

		function addCardListeners() {
			for (var i = 0; i < cards.length; i++) {
				var card = cards[i];
				card.addEventListener('click', cardEventListener);
			}
		}

		function cardEventListener(e) {
			var parent = getParents(e.target, '.carousel-card')[0];
			var parentIndex = options.indexOf(parent.id);

			cards.forEach(function (card) {
				var index = options.indexOf(card.id);
				if (parentIndex > 2) {
					var previousIndex = index - 1 < 0 ? cards.length - 1 : index - 1;
					card.id = options[previousIndex];
				} else if (parentIndex < 2) {
					var nextIndex = index + 1 > cards.length - 1 ? 0 : index + 1;
					card.id = options[nextIndex];
				}
			});
		}

		function getParents(elem, selector) {
			// Element.matches() polyfill
			if (!Element.prototype.matches) {
				Element.prototype.matches =
					Element.prototype.matchesSelector ||
					Element.prototype.mozMatchesSelector ||
					Element.prototype.msMatchesSelector ||
					Element.prototype.oMatchesSelector ||
					Element.prototype.webkitMatchesSelector ||
					function (s) {
						var matches = (this.document || this.ownerDocument).querySelectorAll(s),
							i = matches.length;
						while (--i >= 0 && matches.item(i) !== this) {}
						return i > -1;
					};
			}

			// Setup parents array
			var parents = [];

			// Get matching parent elements
			for (; elem && elem !== document; elem = elem.parentNode) {
				// Add matching parents to array
				if (selector) {
					if (elem.matches(selector)) {
						parents.push(elem);
					}
				} else {
					parents.push(elem);
				}
			}

			return parents;
		}
	})();

	/**
	 * Init swiper slider with 1 slide at once in desktop view
	 */
	// new Swiper('.slides-1', {
	// 	speed: 600,
	// 	loop: true,
	// 	autoplay: {
	// 		delay: 5000,
	// 		disableOnInteraction: false,
	// 	},
	// 	slidesPerView: 'auto',
	// 	pagination: {
	// 		el: '.swiper-pagination',
	// 		type: 'bullets',
	// 		clickable: true,
	// 	},
	// 	navigation: {
	// 		nextEl: '.swiper-button-next',
	// 		prevEl: '.swiper-button-prev',
	// 	},
	// });

	/**
	 * Init swiper slider with 3 slides at once in desktop view
	 */
	// new Swiper('.slides-3', {
	// 	speed: 600,
	// 	loop: true,
	// 	autoplay: {
	// 		delay: 5000,
	// 		disableOnInteraction: false,
	// 	},
	// 	slidesPerView: 'auto',
	// 	pagination: {
	// 		el: '.swiper-pagination',
	// 		type: 'bullets',
	// 		clickable: true,
	// 	},
	// 	navigation: {
	// 		nextEl: '.swiper-button-next',
	// 		prevEl: '.swiper-button-prev',
	// 	},
	// 	breakpoints: {
	// 		320: {
	// 			slidesPerView: 1,
	// 			spaceBetween: 40,
	// 		},

	// 		1200: {
	// 			slidesPerView: 3,
	// 		},
	// 	},
	// });

	/**
	 * Animation on scroll function and init
	 */
	function aos_init() {
		AOS.init({
			duration: 1000,
			easing: 'ease-in-out',
			once: true,
			mirror: false,
		});
	}
	window.addEventListener('load', () => {
		aos_init();
	});
});
