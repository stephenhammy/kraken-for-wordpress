/* =============================================================

		Feature Test v1.0
		A simple feature tests by Paul Irish and Diego Perini.
		http://www.paulirish.com/2009/font-face-feature-detection/
		https://gist.github.com/paulirish/441842

		Free to use under the MIT License.
		http://gomakethings.com/mit/

 * ============================================================= */

// Function to test for @font-face support
var isFontFaceSupported = (function(){
	var
	sheet, doc = document,
	head = doc.head || doc.getElementsByTagName('head')[0] || docElement,
	style = doc.createElement("style"),
	impl = doc.implementation || { hasFeature: function() { return false; } };

	style.type = 'text/css';
	head.insertBefore(style, head.firstChild);
	sheet = style.sheet || style.styleSheet;

	var supportAtRule = impl.hasFeature('CSS2', '') ?
		function(rule) {
			if (!(sheet && rule)) return false;
			var result = false;
			try {
				sheet.insertRule(rule, 0);
				result = !(/unknown/i).test(sheet.cssRules[0].cssText);
				sheet.deleteRule(sheet.cssRules.length - 1);
			} catch(e) { }
			return result;
		} :
		function(rule) {
			if (!(sheet && rule)) return false;
			sheet.cssText = rule;

			return sheet.cssText.length !== 0 && !(/unknown/i).test(sheet.cssText) &&
				sheet.cssText
					.replace(/\r+|\n+/g, '')
					.indexOf(rule.split(' ')[0]) === 0;
		};

	return supportAtRule('@font-face { font-family: "font"; src: "font.ttf"; }');
})();

// Function to test for pseudo selector support
var selectorSupported = function (selector){

	var support, link, sheet, doc = document,
		root = doc.documentElement,
		head = root.getElementsByTagName('head')[0],

		impl = doc.implementation || {
			hasFeature: function() {
					return false;
			}
		},

	link = doc.createElement("style");
	link.type = 'text/css';

	(head || root).insertBefore(link, (head || root).firstChild);

	sheet = link.sheet || link.styleSheet;

	if (!(sheet && selector)) return false;

	support = impl.hasFeature('CSS2', '') ?

		function(selector) {
			try {
					sheet.insertRule(selector + '{ }', 0);
					sheet.deleteRule(sheet.cssRules.length - 1);
			} catch (e) {
					return false;
			}
			return true;

		} : function(selector) {

			sheet.cssText = selector + ' { }';
			return sheet.cssText.length !== 0 && !(/unknown/i).test(sheet.cssText) && sheet.cssText.indexOf(selector) === 0;
		};

	return support(selector);

};

// If @font-face and pseudo selectors are supported, add '.font-face' class to <html> element
if (isFontFaceSupported && selectorSupported(':before')) {
	document.documentElement.className += 'font-face';
}
