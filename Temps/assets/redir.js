var check = true;

try {
	location = "tagil://url?dick";
} catch (error) {
	console.error(error);
}

function what_is_device() {
	var device = -1;

	var agt = navigator.userAgent.toLowerCase();
	var is_android = /android/i.test(agt);
	var is_ios = /iphone|ipad|ipod/i.test(agt);
	var is_windos = /window/i.test(agt);
	var is_safari = window.safari !== undefined;

	if (is_android) {
		device = 111;
	} else if (is_safari || is_ios) {
		device = 222;
		location = "https://apps.apple.com/ru/app/%D0%B2%D0%B8%D1%81%D0%B5%D0%BB%D0%B8%D1%86%D0%B0-ru/id1609414816";
	} else if (is_windos) {
		device = 333;
	}

	return device;
}

var check_device = what_is_device();

//close();

document.getElementById("debugs").innerHTML = check_device;
//document.write(5 + 6);

window.addEventListener('focus', function () {
	//console.log("Focus")
}, false);

setTimeout(function () {
	if (check) {
		//location="https://apps.apple.com/ru/app/%D0%B2%D0%B8%D1%81%D0%B5%D0%BB%D0%B8%D1%86%D0%B0-ru/id1609414816";
	}
},
	1500);

window.addEventListener('blur', function () {
	check = false;
	//console.log("Lost")
	//console.log(check)
}, false);