
const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logo = document.querySelector(".logo");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const isFront = document.body.classList.contains("front-page");


const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
};
const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
};

const changeNavHeight = (height) => {
  navbar.style.height = height;
};

const openMenu = (event) => { // функция открывания меню
  menu.classList.add('is-open'); // вешает класс is-open
  mMenuToggle.classList.add("close-menu");
  document.body.style.overflow = "hidden"; // запрещаем прокрутку сайта под меню
  lightModeOn(); // вкл светлый режим
};
const closeMenu = (event) => { // функция закрывания меню
  menu.classList.remove('is-open'); // убирает класс is-open
  mMenuToggle.classList.remove("close-menu");
  document.body.style.overflow = ""; // возвращаем прокрутку сайта под меню
  lightModeOff(); // выкл светлый режим
};

window.addEventListener("scroll", () => {
  // this.scrollY > 1 ? changeNavHeight('4.5rem') : changeNavHeight('5.875rem'); 
  this.scrollY > 1 ? changeNavHeight('74px') : changeNavHeight('94px'); 
  if (isFront) {
    this.scrollY > 1 ? lightModeOn() : lightModeOff(); 
  }
});
mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
}); // если меню имеет класс is-open ТО закрой меню ИНАЧЕ открой меню


const swiperOne = new Swiper(".features-slider", {
  speed: 400,
  slidesPerView: 1,
  // If we need pagination
  navigation: {
    nextEl: ".slider-button-next",
    prevEl: ".slider-button-prev",
  },
  breakpoints: {
    576: {
      slidesPerView: 2,
      // centeredSlides: true,
      // slidesOffsetBefore: -100,
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 4,
    },
    1200: {
      slidesPerView: 5,
    },
  },
});


const swiperTwo = new Swiper(".steps-slider", {
  speed: 400,
  // loop: true,
  slidesPerView: 1,
  navigation: {
    nextEl: ".steps-button-next",
    prevEl: ".steps-button-prev",
  },
  breakpoints: {
    576: {
      slidesPerView: 1,
    },
    992: {
      slidesPerView: 2,
    },
    1200: {
      slidesPerView: 3,
    },
  },
});


const swiperThree = new Swiper(".blog-slider", {
  speed: 400,
  // loop: true,
  slidesPerView: 1,
  // slidesOffsetBefore: -50,
  // spaceBetwwen: 30,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      renderBullet: function (index, className) {
      return '<span class="' + className + '">' + (index + 1) + '</span>';
    },
  },
  navigation: {
    nextEl: ".blog-button-next",
    prevEl: ".blog-button-prev",
  },
  breakpoints: {
    1710: {
      slidesPerView: 1,
      // slidesOffsetBefore: -30,
    },
    1200: {
      slidesPerView: 1,
      slidesOffsetBefore: -30,
    },
    992: {
      slidesPerView: 1,
      slidesOffsetBefore: -30,
    },
  },
});


const swiperFour = new Swiper(".research-slider", {
  speed: 400,
  // loop: true,
  slidesPerView: 2,
  // slidesOffsetBefore: -550,
  // spaceBetwwen: 30,
  navigation: {
    nextEl: ".research-button-next",
    prevEl: ".research-button-prev",
  },
  breakpoints: {
    1710: {
      slidesPerView: 1,
      slidesOffsetBefore: -495,
    },
    1460: {
      slidesPerView: 1,
      slidesOffsetBefore: 10,
    },
    1200: {
      slidesPerView: 1,
      slidesOffsetBefore: -110,
    },
    992: {
      slidesPerView: 1,
      slidesOffsetBefore: -210,
    },
    768: {
      slidesPerView: 2,
      slidesOffsetBefore: 30,
    },
    576: {
      slidesPerView: 2,
      slidesOffsetBefore: -320,
    },
    370: {
      slidesPerView: 2,
      slidesOffsetBefore: -342,
    },
  },
});






// Скрипт модального окна рефакторинг(несколько окон)
let currentModal; // текущее модальное окно
let modalDialog; // белое диалоговое окно
// окно благодарности:
let alertModal = document.querySelector("#alert-modal");

// константа со всеми кнопками которые вызывают модальное окно:
const modalButtons = document.querySelectorAll("[data-toggle=modal]");
// запускаем прослушиватель события click на каждую кнопку:
modalButtons.forEach((button) => {
  // клик по кнопке:
  button.addEventListener("click", (event) => {
    // отменяем стандартное поведение при клике(сброс к верху страницы):
    event.preventDefault();
    // определяем текущее открытое окно:
    currentModal = document.querySelector(button.dataset.target);
    // присваиваем класс is-open текущему модальному окну:/ открываем текущее окно
    currentModal.classList.toggle("is-open");
    // назначаем диалоговое окно
    modalDialog = currentModal.querySelector(".modal-dialog");
    // отслеживаем клик по окну и пустым областям
    currentModal.addEventListener("click", (event) => {
      // если клик по пустой области
      if (!event.composedPath().includes(modalDialog)) {
        // то закрываем диалоговое(модальное) окно
        currentModal.classList.remove("is-open");
      }
    });
  });
});

// закрытие модального окна по клавише Escape:
document.addEventListener("keyup", (event) => {
  if (
    event.key == "Escape" && currentModal.classList.contains("is-open") 
  ) {
    currentModal.classList.toggle("is-open");
  }
});



// валидация форм
const forms = document.querySelectorAll("form");
forms.forEach((form) => {
  const validation = new JustValidate(form, {
      errorFieldCssClass: "is-invalid",
  });
  validation
    .addField("[name=username]", [
      {
        rule: "required",
        errorMessage: "Укажите имя",
      },
      {
        rule: "maxLength",
        value: 50,
        errorMessage: "Максимально 50 символов",
      },
    ])
    .addField("[name=userphone]", [
      {
        rule: "required",
        errorMessage: "Укажите телефон",
      },
    ])
    .onSuccess((event) => {
      const thisForm = event.target;
      const formData = new FormData(thisForm);
      const ajaxSend = (formData) => {
        fetch(thisForm.getAttribute("action"), {
          method: thisForm.getAttribute("method"),
          body: formData,
        }).then((response) => {
          if (response.ok) {
            thisForm.reset();
            // закрываем текущее модальное окно:
            currentModal.classList.remove("is-open");
            // выводим окно alert-modal(окно благодарности):
            alertModal.classList.add("is-open");
            // текущее окно теперь alert-modal
            currentModal = alertModal;
            // назначаем диалоговое окно
            modalDialog = currentModal.querySelector(".modal-dialog");
            // отслеживаем клик по окну и пустым областям
            currentModal.addEventListener("click", (event) => {
              // если клик по пустой области
              if (!event.composedPath().includes(modalDialog)) {
                // то закрываем диалоговое(модальное) окно
                currentModal.classList.remove("is-open");
              }
            });
            // alert("Форма отправлена!");
          } else {
            alert("Ошибка. Текст ошибки: ".response.statusText);
          }
        });
      };
      ajaxSend(formData);
    });
});


/* Создаем префикс +7, даже если вводят 8 или 9 */
const prefixNumber = (str) => {
  /* если вводят семерку, добавляем ей скобку */
  if (str === "7") {
    return "7 (";
  }
  /* если вводят восьмерку, ставим вместо нее +7 ( */
  if (str === "8") {
    return "+7 (";
  }
  /* если пишут девятку, заменяем на +7 (9  */
  if (str === "9") {
    return "7 (9";
  }
  /* в других случаях просто 7 (  */
  return "7 (";
}; /* профикс в любом раскладе будет +7 () */

/* Ловим события ввода в любом поле */
document.addEventListener("input", (e) => {
  /* Проверяем, что это поле имеет класс phone-mask */
  if (e.target.classList.contains("phone-mask")) {
    /* поле с телефоном помещаем в переменную input */
    const input = e.target;
    /* вставляем плюс в начале номера */
    const value = input.value.replace(/\D+/g, "");
    /* длинна номера 11 символов */
    const numberLength = 11;

    /* Создаем переменную, куда будем записывать номер */
    let result;
    /* Если пользователь ввел 8... */
    if (input.value.includes("+8") || input.value[0] === "8") {
      /* Стираем восьмерку */
      result = "";
    } else {
      /* Оставляем плюсик в поле */
      result = "+";
    }

    /* Запускаем цикл, где переберем каждую цифру от 0 до 11 */
    for (let i = 0; i < value.length && i < numberLength; i++) {
      switch (i) {
        case 0:
          /* в самом начале ставим префикс +7 ( */
          result += prefixNumber(value[i]);
          continue;
        case 4:
          /* добавляем после "+7 (" круглую скобку ")" */
          result += ") ";
          break;
        case 7:
          /* дефис после 7 символа */
          result += "-";
          break;
        case 9:
          /* еще дефис  */
          result += "-";
          break;
        default:
          break;
      }
      /* на каждом шаге цикла добавляем новую цифру к номеру */
      result += value[i];
    }
    /* итог: номер в формате +7 (999) 123-45-67 */
    input.value = result;
  }
});