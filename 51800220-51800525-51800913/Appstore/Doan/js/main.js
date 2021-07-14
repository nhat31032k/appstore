// const inputs = document.querySelectorAll(".input");


// function addcl(){
// 	let parent = this.parentNode.parentNode;
// 	parent.classList.add("focus");
// }

// function remcl(){
// 	let parent = this.parentNode.parentNode;
// 	if(this.value == ""){
// 		parent.classList.remove("focus");
// 	}
// }


// inputs.forEach(input => {
// 	input.addEventListener("focus", addcl);
// 	input.addEventListener("blur", remcl);
// });
function validateinput(){
	let emailfiled=document.getElementById('email');
	let email=emailfiled.value;
	let passwordFiled=document.getElementById('pwd');
	let password=passwordFiled.value;
	let message=document.getElementById('message')
	if (email===""){
		message.innerHTML='vui lòng nhập email của bạn'
		emailfiled.focus();
		return false;
	}
	else if (!email.includes(".com")){
		message.innerHTML='email không hợp lệ'
		emailfiled.focus();
	return false;
	}
	 else if (password=== "") {
		message.innerHTML='vui lòng nhập mật khẩu '
		passwordFiled.focus();	
		return false;
	}
	else if (password.length<6) {
		message.innerHTML='mật khẩu phải hơn 6 ký tự'
		passwordFiled.focus();	
		return false;
	}
		message.innerHTML=""
	return true;
}
function clearErormessage(){
	let message=document.getElementById('message').innerHTML=""
}
