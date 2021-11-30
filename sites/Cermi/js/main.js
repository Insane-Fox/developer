// Выпадающее меню
let openBurger = document.querySelector('.header__burger');
let closeBurger = document.querySelector('.burger__close');
let menuList = document.querySelector('.burger__nav');

  

openBurger.addEventListener('click', () => menuList.style.display = 'block');
closeBurger.addEventListener('click', () => menuList.style.display = 'none');

// Модальное окно

let openModal = document.querySelectorAll('.open-modal');
let modalWindow = document.querySelector('.modal');
let closeModal = document.querySelector('.close-modal');

for (i=0; i<4; i++){ openModal[i].addEventListener('click', () => modalWindow.style.display = 'block');}
closeModal.addEventListener('click', () => modalWindow.style.display = 'none');

// Плавный переход

const anchors = document.querySelectorAll('a[href*="#"]')

for (let anchor of anchors) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault()
    
    const blockID = anchor.getAttribute('href').substr(1)
    
    document.getElementById(blockID).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    })

    menuList.style.display = 'none';
  })
}
// Очистка формы модального окна

let modalNameInput = document.querySelector('#modal-name');
let modalTelInput = document.querySelector('#modal-phone');
let modalButton = document.querySelector('.modal__btn');

modalButton.addEventListener('click',() => {
  modalNameInput.value = '';
  modalTelInput.value = '';
  modalWindow.style.display = 'none';})

// Очистка основной формы

let formName = document.querySelector('#form-name');
let formTel = document.querySelector('#form-tel');
let formMail = document.querySelector('#form-mail');
let formButton = document.querySelector('.form__btn');

formButton.addEventListener('click', () => {
  formName.value = '';
  formTel.value = '';
  formMail.value = '';
})

// Отправка данных на сервер
function send(event, php){
event.preventDefault ? event.preventDefault() : event.returnValue = false;
var req = new XMLHttpRequest();
req.open('POST', php, true);
req.onload = function() {
	if (req.status >= 200 && req.status < 400) {
    console.log(this.response);
	    json = JSON.parse(this.response); // Ебанный internet explorer 11
    	console.log();
        
    	// ЗДЕСЬ УКАЗЫВАЕМ ДЕЙСТВИЯ В СЛУЧАЕ УСПЕХА ИЛИ НЕУДАЧИ
    	if (json.result == "success") {
    		// Если сообщение отправлено
    		alert("Сообщение отправлено");
    	} else {
    		// Если произошла ошибка
    		alert("Ошибка. Сообщение не отправлено");
    	}
    // Если не удалось связаться с php файлом
    } else {alert("Ошибка сервера. Номер: "+req.status);}}; 

// Если не удалось отправить запрос. Стоит блок на хостинге
req.onerror = function() {alert("Ошибка отправки запроса");};
req.send(new FormData(event.target));
}


