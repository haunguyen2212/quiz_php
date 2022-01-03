function checkLoginAd(){
	$('#txtAdName').html('');
	$('#txtAdPass').html('');
	var name = $('input[name="adName"]').val();
	var pass = $('input[name="adPass"]').val();
	var check = 1;
	if (name.length != 5) {
		$('#txtAdName').html('Tên tài khoản không hợp lệ!');
		check = 0;
	}
	if (pass.length == 0) {
		$('#txtAdPass').html('Vui lòng nhập mật khẩu của bạn!');
		check = 0;
	}
	if (check) {
		$('#ad-sm').attr('type','submit');
	}
}

function checkChangePassword(){
	$('#txt-old-passwd').html('');
	$('#txt-new-passwd').html('');
	$('#txt-re-passwd').html('');
	var oldpass = $('input[name="old-passwd"]').val();
	var newpass = $('input[name="new-passwd"]').val();
	var repass = $('input[name="re-passwd"]').val();
	var check = 1;
	if (oldpass.length == 0) {
		$('#txt-old-passwd').html('<i class="fas fa-exclamation-triangle"></i> Vui lòng nhập mật khẩu của bạn!!!');
		check = 0;
	}
	if (newpass.length < 5) {
		$('#txt-new-passwd').html('<i class="fas fa-exclamation-triangle"></i> Mật khẩu phải có ít nhất 5 kí tự!!!');
		check = 0;
	}
	else if (newpass != repass) {
		$('#txt-re-passwd').html('<i class="fas fa-exclamation-triangle"></i> Mật khẩu không trùng khớp !!!');
		check = 0;
	}
	if (check) {
		$('#change-passwd').attr('type','submit');
	}

}
