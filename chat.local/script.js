//открыть модал окно контактов
var btnOpenContact = document.querySelector("#open-contact");
btnOpenContact.onclick = function() {
	var contactsModal = document.querySelector("#contacts-modal");
	contactsModal.style.display = "block";
}

//закрыть модал окно контактов
var contactsModalCloseBtn = document.querySelector("#contacts-modal .close");
	contactsModalCloseBtn.onclick = function() {
		var contactsModal = document.querySelector("#contacts-modal");
		contactsModal.style.display = "none";
	}

//открыть модал окно войти
// var btnOpenLogin = document.querySelector("#open-login");
// btnOpenLogin.onclick = function() {
// 	var loginModal = document.querySelector("#login-modal");
// 	loginModal.style.display = "block";
// }

//закрыть модал окно контактов
var contactsModalCloseBtn = document.querySelector("#login-modal .close");
	contactsModalCloseBtn.onclick = function() {
		var contactsModal = document.querySelector("#login-modal");
		contactsModal.style.display = "none";
	}


function add(element) {
	
	var friend_lis = document.querySelector("#friend_lis");
	console.dir(element);
	var ssylka = element.dataset.ssylka;
	var ajax = new XMLHttpRequest();
		ajax.open('GET', ssylka, false);
		ajax.send();

	console.dir(ajax);
	friend_lis.innerHTML = ajax.response;
}

function delet(element) {
	var friend_lis = document.querySelector("#friend_lis");
	console.dir(element);
	var sylka = element.dataset.sylka;
	var ajax = new XMLHttpRequest();
		ajax.open('GET', sylka, false);
		ajax.send();

	console.dir(ajax);
	friend_lis.innerHTML = ajax.response;
}

var otpravka_sms = document.querySelector("#form");
console.dir(otpravka_sms);
otpravka_sms.onsubmit = function(sobitye) {
	sobitye.preventDefault();
	var komu = otpravka_sms.querySelector("input[name='user_id']");
	var otkogo = otpravka_sms.querySelector("input[name='user_id_2']");
	var text = otpravka_sms.querySelector("textarea");

	var dannie = "otpravka_sms=1" +
					"&user_id=" + komu.value +
						"&user_id_2=" + otkogo.value +
							"&text="+ text.value;


	var ajax = new XMLHttpRequest();
		ajax.open("POST", form.action, false);
		ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		ajax.send(dannie);

		console.dir(ajax);
		var spisokSoobsheniy = document.querySelector("#spisok-soobsheniy");
			spisokSoobsheniy.innerHTML = ajax.response;
}