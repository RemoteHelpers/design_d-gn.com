
'use strict';

document.addEventListener('DOMContentLoaded', () => {

  $(document).ready(function () {
    $('#fullpage').fullpage({
      sectionsColor: ['#FFD200', '#FFDF48', '#FFDF48', '#FFDF48', '#FFDF48', '#FFDF48'],
      scrollingSpeed: 800,
      licenseKey: '4358BF2E-3FE0429E-BF643872-85B662FF'
    });
  });


  const list = document.querySelector('.portfolio_btns'),
    cards = document.querySelectorAll('.card'),
    listItems = document.querySelectorAll('.filter_btn');


  function filter() {
    list.addEventListener('click', event => {
      const targetID = event.target.dataset.id;
      const target = event.target;
      console.log(targetID);

      if (target.classList.contains('filter_btn')) {
        listItems.forEach(listItem => listItem.classList.remove('filter_btn_active'))
        target.classList.add('filter_btn_active');
      }


      switch (targetID) {
        case 'branding':
          getItems(targetID)
          break;
        case 'graphic':
          getItems(targetID)
          break;
        case 'web':
          getItems(targetID)
          break;
      }
    })
  }
  filter()

  function getItems(className) {
    cards.forEach(card => {
      if (card.classList.contains(className)) {
        card.style.display = 'block'
      } else {
        card.style.display = 'none'
      }
    })
  }


  const dropdown = document.querySelector('.dropdown'),

    form = document.querySelector('#form'),
    jsInputs = form.querySelectorAll('.js_input'),
    inputEmail = form.querySelector('.input_email'),


    topLine = dropdown.querySelector('.dropdown_line'),
    dropdownBtn = dropdown.querySelector('.dropdown_btn'),
    dropdownList = dropdown.querySelector('.dropdown_list'),
    dropdownArrow = dropdown.querySelector('.dropdown_arrow'),
    dropdownItem = dropdownList.querySelectorAll('.dropdown_item'),

    hiddenInput = dropdown.querySelector('.dropdown_input_hidden');



  function emailValidation(email) {
    let req = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return req.test(String(email).toLowerCase());
  }



  form.onsubmit = function (event) {
    event.preventDefault();

    let emailVal = inputEmail.value,
      emptyInputs = Array.from(jsInputs).filter(input => input.value === '');


    jsInputs.forEach(input => {
      if (input.value === '') {
        input.classList.add('_error')
      } else {
        input.classList.remove('_error')
      }

    });

    if (emptyInputs.length !== 0) {
      return false;
    }

    if (!emailValidation(emailVal)) {
      inputEmail.classList.add('_error')
      return false;
    } else {
      inputEmail.classList.remove('_error')
    }

  }





  // multiselect


  dropdownItem.forEach(listItem => {
    listItem.addEventListener('click', e => {
      e.stopPropagation();
      const selectInput = listItem.querySelectorAll('.multi_select_input').forEach(item => {
        const selectValue = item.value;

        if (item.checked) {
          dropdownBtn.textContent += selectValue
          hiddenInput.value += selectValue
        }
      })
    })
  })


  topLine.addEventListener('click', () => {
    dropdownList.classList.toggle('dropdown_list_active');
    dropdownArrow.classList.toggle('dropdown_arrow_rotate')
  })


  document.addEventListener('click', event => {
    if (event.target !== topLine && event.target !== dropdownList) {
      dropdownList.classList.remove('dropdown_list_active');
      dropdownArrow.classList.remove('dropdown_arrow_rotate')
    }
  })

  document.addEventListener('keydown', event => {
    if (event.key === 'Escape') {
      dropdownList.classList.remove('dropdown_list_active');
      dropdownArrow.classList.remove('dropdown_arrow_rotate')
    }
  })







  // scroll to top button

  const scrollBtn = document.querySelector('.scroll_btn');
  scrollBtn.addEventListener('click', () => {
    document.scrollTo(0, 0)
  })






  // Burger menu


  const burgerContent = document.querySelectorAll('.burger_content'),
    burger = document.querySelectorAll('.burger'),
    closeBurger = document.querySelectorAll('.close_burger'),
    section = document.querySelectorAll('.section');



  burgerContent.forEach(burgerContentItem => {
    burger.forEach(burgerItem => {
      burgerItem.addEventListener('click', () => {
        burgerContentItem.classList.add('_burger_active')
        section.forEach(sectionItem => {
          sectionItem.classList.add('lock')
        })
        closeBurger.forEach(closeBurgerItem => {
          closeBurgerItem.addEventListener('click', () => {
            burgerContentItem.classList.remove('_burger_active')
            section.forEach(sectionItem => {
              sectionItem.classList.remove('lock')
            })
          })
        })
      })
      document.addEventListener('keydown', event => {
        if (event.key === 'Escape') {
          burgerContentItem.classList.remove('_burger_active')
          section.forEach(sectionItem => {
            sectionItem.classList.remove('lock')
          })
        }
      })
    })
  })




  // modal-popup


  let linkArray = document.querySelectorAll('.card'),
    popupClose = document.querySelectorAll('.popup_close');

  linkArray.forEach(item => {
    item.addEventListener('click', event => {
      event.preventDefault();

      let modalName = item.getAttribute("data-modal")
      let modal = document.querySelector('.js-modal[data-modal="' + modalName + '"]');

      modal.classList.add('popup_active');

    })
  })

  popupClose.forEach(item => {
    item.addEventListener('click', () => {
      let parent = item.parentNode.parentNode.parentNode;
      parent.classList.remove('popup_active');
    })
    document.addEventListener('keydown', event => {
      if (event.key === 'Escape') {
        let parent = item.parentNode.parentNode.parentNode;
        parent.classList.remove('popup_active');
      }
    })
  })




  // sending form 



})