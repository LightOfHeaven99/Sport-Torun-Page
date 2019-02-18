const $card = document.querySelector('.parallax-card');
const $circle = document.querySelector('.card__circle');
const $cardComet = document.querySelector('.card__cometOuter');
const $wrapper = document.querySelector('.parallax-wrapper');

const generateTranslate = (el, e, value) => {
	el.style.transform = `translate(${e.clientX*value}px, ${e.clientY*value}px)`;
}
// http://stackoverflow.com/a/1480137
const cumulativeOffset = (element) => {
    var top = 0, left = 0;
    do {
        top += element.offsetTop  || 0;
        left += element.offsetLeft || 0;
        element = element.offsetParent;
    } while(element);

    return {
        top: top,
        left: left
    };
};
function isElementInViewport (el) {

    //special bonus for those using jQuery
    if (typeof jQuery === "function" && el instanceof jQuery) {
        el = el[0];
    }

    var rect = el.getBoundingClientRect();

    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && /*or $(window).height() */
        rect.right <= (window.innerWidth || document.documentElement.clientWidth) /*or $(window).width() */
    );
};

document.onmousemove = (event) => {

	if (isElementInViewport($wrapper)) {
		const e = event || window.event;
		const x = (e.pageX - cumulativeOffset($card).left - (350 / 2)) * -1 / 100;
		const y = (e.pageY - cumulativeOffset($card).top - (350 / 2)) * -1 / 100;

		const matrix = [
			[1, 0, 0, -x * 0.00005],
			[0, 1, 0, -y * 0.00005],
			[0, 0, 1, 1],
			[0, 0, 0, 1]
		];

	  generateTranslate($circle, e, 0.05);
		generateTranslate($cardComet, e, 0.05);

		$card.style.transform = `matrix3d(${matrix.toString()})`;
	}
}
