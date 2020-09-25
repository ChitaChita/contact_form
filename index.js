window.onload = function () {
	// お問い合わせフォームのfadein
	$("button.btn-open").on("click", function () {
		$("div.contact-background").fadeIn(600).css("display", "flex");
	});
	// お問い合わせフォームのfadeout
	$("#close-btn").on("click", function () {
		$("div.contact-background").fadeOut(600);
	});
	
	// $('div.contact-form').fadeOut(300);
	// 				const accepts = document.getElementById("contact-background");
	// 				accepts.classList.add("accepts");
	// 				$('div.accept').fadeIn(600);
	$("button.accept").on("click", function () {
		$("div.contact-background").fadeOut(600);
	});
}
