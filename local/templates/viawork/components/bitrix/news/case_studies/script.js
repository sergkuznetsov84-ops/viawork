(function($){
	document.addEventListener("DOMContentLoaded", () => {
	  function o(e, o) {
			var t = e.height()
			  , i = e.css("height", "auto").height();
			e.height(t),
			e.stop().animate({
				height: i
			}, o)
		};
		let s = $(".comp-33 .studies-btns.product-btns");
		s.addClass("show");
		o(s, 300);
		$(".comp-33 .comp-33-product-filters-title").on("click", function() {
			console.log(55);
			var e;
			s.hasClass("show") ? (e = s.height(),
			s.height(e).removeClass("show").stop().animate({
				height: 0
			}, 300)) : (s.addClass("show"),
			o(s, 300))
		});
		$(".comp-33 .switch-filter .cases").on("click", function() {
			var e, o = $(".comp-33 .studies-btns.product-btns");
			o.hasClass("show") && (e = o.height(),
			o.height(e).removeClass("show").stop().animate({
				height: 0
			}, 300))
		});
	});
	 
})(jQuery)