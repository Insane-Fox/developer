  // модальное окно
let button = document.querySelectorAll('#toModal');
let modal = document.querySelector('.modal');
let clbutton = document.querySelector('.modal__close');
let overlay = document.querySelector('.modal__overlay');

  openModal = function () {
    button.forEach(element => {
      element.addEventListener('click',() => {
      modal.classList.toggle('modal__active');
    });
    });
  };

   closeModal = function () {
      clbutton.addEventListener('click',() => {
      modal.classList.toggle('modal__active');
    });
    };


//выпадающее меню
   let closeHidden = document.querySelector('#closeHiddenMenu');
    let openHidden = document.querySelector('#toHiddenMenu');
    let burgerButton = document.querySelector('.header__burger');
    let hiddenMenuItem = document.querySelector('.header__menu-hidden');

    openHidden.addEventListener('click', () => {
      burgerButton.style.display = 'none';
      hiddenMenuItem.style.display = 'block';
    })
    closeHidden.addEventListener('click', () => {
      burgerButton.style.display = 'block';
      hiddenMenuItem.style.display = 'none';
    })

// плавный переход
    const anchors = document.querySelectorAll('a[href*="#"]')

for (let anchor of anchors) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault()
    
    const blockID = anchor.getAttribute('href').substr(1)
    
    document.getElementById(blockID).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    })
    if (document.documentElement.clientWidth < 769) {
    burgerButton.style.display = 'block';
    hiddenMenuItem.style.display = 'none';}
    else {
      hiddenMenuItem.style.display = 'none';
    }
  })
}form__btn
  
// отправка данных на сервер

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

//Очистка модального окна

let formName = document.querySelector('#form-name');
let formTel = document.querySelector('#form-tel');
let formButton = document.querySelector('#form__btn');

formButton.addEventListener('click', () => {
  formName.value = '';
  formTel.value = '';
  modal.classList.toggle('modal__active')
})

openModal();
closeModal();


