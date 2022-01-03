// exam/quiz.php
function checkResult() {
	$.ajax({
		url:'check_result.php',
		success: function(){
			location.reload();
		}
	})
}

function saveAnswer(id){
	name = "Opt" + id;
	var s = $('input[name="'+name+'"]:checked').val();
	
	$.ajax({
		type:'post',
		url:'send_answer.php',
		data:'id='+id+"&choice="+s
	});
}

// exam/index.php
function checkLogin(){
	$('#txtName').html('');
	$('#txtPass').html('');
	var name = $('input[name="loginName"]').val();
	var pass = $('input[name="loginPass"]').val();
	var check = 1;
	if (name.length != 5) {
		$('#txtName').html('<i class="fas fa-exclamation-triangle"></i> Tên tài khoản không hợp lệ!');
		check = 0;
	}
	if (pass.length == 0) {
		$('#txtPass').html('<i class="fas fa-exclamation-triangle"></i> Vui lòng nhập mật khẩu của bạn!');
		check = 0;
	}
	if (check) {
		$('#sm').attr('type','submit');
	}
}

function checkChangePass(){
	$('#txt-old-pass').html('');
	$('#txt-new-pass').html('');
	$('#txt-re-pass').html('');
	var oldpass = $('input[name="old-pass"]').val();
	var newpass = $('input[name="new-pass"]').val();
	var repass = $('input[name="re-pass"]').val();
	var check = 1;
	if (oldpass.length == 0) {
		$('#txt-old-pass').html('<i class="fas fa-exclamation-triangle"></i> Vui lòng nhập mật khẩu của bạn!!!');
		check = 0;
	}
	if (newpass.length < 5) {
		$('#txt-new-pass').html('<i class="fas fa-exclamation-triangle"></i> Mật khẩu phải có ít nhất 5 kí tự!!!');
		check = 0;
	}
	else if (newpass != repass) {
		$('#txt-re-pass').html('<i class="fas fa-exclamation-triangle"></i> Mật khẩu không trùng khớp !!!');
		check = 0;
	}
	if (check) {
		$('#btn-change-pass').attr('type','submit');
	}
}

function countDown(number){
	number--;
	var hour = Math.floor(number/3600);
	var minute = Math.floor((number/60)%60);
	var second = Math.floor(number%60);
	if (hour<10) hour = '0'+hour;
	if (minute<10) minute = '0'+minute;
	if (second<10) second = '0'+second;
	
	$('#count-down').html(hour+":"+minute+":"+second);
	myVar = setTimeout("countDown("+number+")",1000);
	if (number<0) {
		clearTimeout(myVar);
		checkResult();
	}

}