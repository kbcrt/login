const form = document.querySelector('form');
const captcha = document.querySelector('[name="captcha"]');

form.addEventListener('submit', function(e) {
	e.preventDefault();

	if (captcha.value != "") {
		if (captcha.value != "<?php echo $_SESSION['code']; ?>") {
			alert("请输入正确的验证码！");
			document.location.reload(true);
			return false;
		} else {
			window.location.href = "http://www.baidu.com";
		}
	}
});
