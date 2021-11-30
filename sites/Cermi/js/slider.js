let leftArr = document.getElementById('leftArr');
let rightArr = document.getElementById('rightArr');
let dots = document.getElementsByClassName('dot');
let oft = document.getElementsByClassName('slider__item');
let kar = document.querySelector('.slider__list');


function prevSlide() {
  for (i=0; i<3; i++) {
   isActive = dots[i].classList.contains('dot-active');
   if (isActive == true) {
     dots[i].classList.toggle('dot-active');
     if (i == 0) {
       i+=2;
       dots[i].classList.toggle('dot-active');}
       else {
         i--;
         dots[i].classList.toggle('dot-active');
       }
      
    }
  }
  let first = kar.firstElementChild.innerHTML;
   let insert = document.createElement('li');
   let del = document.querySelector('.slider__item');
   insert.className = "slider__item";
   insert.innerHTML = first;
   kar.append(insert);
   kar.removeChild(del);
}
// пробуем через last element child
function nextSlide() {
  for (i=0; i<3; i++) {
   isActive = dots[i].classList.contains('dot-active');
   if (isActive == true) {
     dots[i].classList.toggle('dot-active');
     if (i == 2) {
       i-=2;
       dots[i].classList.toggle('dot-active');}
       else {
         i++;
         dots[i].classList.toggle('dot-active');
        }
     }
  }
  let last = kar.lastElementChild.innerHTML;
   let insert = document.createElement('li');
   let del = document.querySelectorAll('.slider__item');
   insert.className = "slider__item";
   insert.innerHTML = last;
   kar.prepend(insert);
   kar.removeChild(del[2]);
}


leftArr.addEventListener('click', prevSlide);
rightArr.addEventListener('click', nextSlide);