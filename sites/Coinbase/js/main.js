// Плавная прокрутка

const anchors = document.querySelectorAll('a[href*="#"]');

for (let anchor of anchors) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault()
    
    const blockID = anchor.getAttribute('href').substr(1)
    
    document.getElementById(blockID).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    })
  })
}
// Модальное окно

let openButton = document.querySelectorAll('#contact');
let closeButton = document.querySelector('.modal__close');
let modalWindow = document.querySelector('.modal');

for (i=0; i<2; i++){ openButton[i].addEventListener('click', () => modalWindow.style.display = 'block')}
closeButton.addEventListener('click', () => modalWindow.style.display = 'none');

// Окно выбора тарифа

let openSelector = document.querySelectorAll('#selector');
let closeSelector = document.querySelector('.select__close');
let selectorWindow = document.querySelector('.select');

console.log(openSelector);

for (i=0; i<3; i++){ openSelector[i].addEventListener('click', () => selectorWindow.style.display = 'block')}
closeSelector.addEventListener('click', () => selectorWindow.style.display = 'none');

// Очистка формы в модалке

let modalMailInput = document.querySelector('#modal-mail');
let modalNameInput = document.querySelector('#modal-name');
let questionInput = document.querySelector('#question');
let modalConfirmButton = document.querySelector('#modal-submit');

modalConfirmButton.addEventListener('click', () => {
    modalMailInput.value = '';
    modalNameInput.value = '';
    questionInput.value = '';
    modalWindow.style.display = 'none';
  })

  // Очистка формы при выборе тарифа

let selectorMailInput = document.querySelector('#selector-mail');
let selectorNameInput = document.querySelector('#selector-name');
let selectorConfirmButton = document.querySelector('#selector-submit');

selectorConfirmButton.addEventListener('click', () => {
    selectorMailInput.value = '';
    selectorNameInput.value = '';
    selectorWindow.style.display = 'none';
  })

 // Очистка формы на главной странице

let mainMailInput = document.querySelector('#main-mail');
let mainConfirmButton = document.querySelector('#main-submit');

mainConfirmButton.addEventListener('click', () => mainMailInput.value = '')

//Отправка данных на сервер

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