window.onload = function () {
	// お問い合わせフォームのfadein
	$("button.btn-open").on("click", function () {
		$("div.contact-background").fadeIn(600).css("display", "flex");
	});
	// お問い合わせフォームのfadeout
	$("#close-btn").on("click", function () {
		$("div.contact-background").fadeOut(600);
	});
	
	$('div.contact-form').fadeOut(300);
					const accepts = document.getElementById("contact-background");
					accepts.classList.add("accepts");
					$('div.accept').fadeIn(600);
	$("button.accept").on("click", function () {
		$("div.contact-background").fadeOut(600);
	});
}
$('#submit-btn').on('click', function() {
	if (!$('form')[0].reportValidity()) {
		return false;
	}

	var mail = document.getElementById("mail").value;
	var mailConfirm = document.getElementById("emailConfirm").value;

	if (mail != mailConfirm) {
		alert("メールアドレスとメールアドレス(確認用)が一致しません");
		return false;
	}
	var lastName = ($('#lastName').val());
	var firstName = ($('#firstName').val());
	var lastFurigana = ($('#lastFurigana').val());
	var firstFurigana = ($('#firstFurigana').val());
	var firstPostal = ($('#firstPostal').val());
	var secondPostal = ($('#secondPostal').val());
	var address = ($('#address').val());
	var firstPhone = ($('#firstPhone').val());
	var secondPhone = ($('#secondPhone').val());
	var thirdPhone = ($('#thirdPhone').val());
	var mail = ($('#mail').val());
	var message = ($('#message').val());



	$.ajax({
			url: "./system/contact.php",
			type: 'POST',
			data: {
				lastName: lastName,
				firstName: firstName,
				lastFurigana: lastFurigana,
				firstFurigana: firstFurigana,
				firstPostal: firstPostal,
				secondPostal: secondPostal,
				address: address,
				firstPhone: firstPhone,
				secondPhone: secondPhone,
				thirdPhone: thirdPhone,
				mail: mail,
				message: message
			}
		})
		.then(
			// 1つめは通信成功時のコールバック
			function() {
				$('div.contact-form').fadeOut(300);
				const accepts = document.getElementById('background');
				accepts.classList.add('accepts');
				$('div.accept').fadeIn(600);
			},
			// 2つめは通信失敗時のコールバック
			function() {
				alert("読み込み失敗");
			});
	return false;
});