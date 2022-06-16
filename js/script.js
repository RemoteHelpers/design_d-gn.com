
'use strict';

document.addEventListener('DOMContentLoaded', () => {

  $(document).ready(function () {
    $('#fullpage').fullpage({
      sectionsColor: ['#FFD200', '#FFDF48', '#FFDF48', '#FFDF48', '#FFDF48', '#FFDF48'],
      anchors: ['page1', 'page2', 'page3', 'page4', 'page5', 'page6', 'page7'],
      scrollingSpeed: 800,
      licenseKey: '4358BF2E-3FE0429E-BF643872-85B662FF'
    });
  });


  $(document).on('click', '.scroll_btn', function () {
    fullpage_api.moveTo('page1', 1);
  });


  // multiselect initialisation
  let sel = document.querySelectorAll('select');
  M.FormSelect.init(sel);


  
  document.querySelector('.select-dropdown').placeholder = "SERVICES  ⯆";



  // sort portfolio cards


  const filterBtn = document.querySelectorAll('.filter_btn'),
    tabsItems = document.querySelectorAll('.tab_item');

  filterBtn.forEach(onTabClick);

  function onTabClick(item) {
    item.addEventListener('click', () => {
      let currentBtn = item;
      let dataId = currentBtn.getAttribute('data-tab');
      let currentTab = document.querySelector(dataId);

      console.log(currentTab);

      if (!currentBtn.classList.contains('active')) {
        filterBtn.forEach(item => {
          item.classList.remove('active');
        })
        tabsItems.forEach(item => {
          item.classList.remove('active');
        })

        currentBtn.classList.add('active');
        currentTab.classList.add('active')
      }
    })
  }


  // more cads button in portfolio

  const moreBtn = document.querySelectorAll('.moreBtn'),
    moreContent = document.querySelectorAll('.more');

  moreBtn.forEach(btn => {
    moreContent.forEach(item => {
      const currentContent = item;

      btn.addEventListener('click', () => {
        currentContent.classList.toggle('active')

        if (!currentContent.classList.contains('active')) {
          btn.innerHTML = 'show more'
        } else {
          btn.innerHTML = 'show less'
        }

      })
    })
  })


  const form = document.querySelector('#form'),
    jsInputs = form.querySelectorAll('.js_input'),
    inputEmail = form.querySelector('.input_email'),
    multiSelectInput = form.querySelector('.select-dropdown'),
    errorName = form.querySelectorAll('.error_name');

    multiSelectInput.name = 'select_way';
    multiSelectInput.classList.add('input', 'js_input');



  function emailValidation(email) {
    let req = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return req.test(String(email).toLowerCase());
  }



  // fetch for sendind form data
  const url = 'https://crm-s.com/api/v1/leads-public';
  async function addUserData(userData) {
    const response = await fetch(url, {
      method: 'POST',
      body: userData,
    });
    if (response.ok) {
      alert('Данные отправлены!')
      errorName.forEach(errorNameItem => {
        errorNameItem.classList.remove('_error_fields')
      })
    }
    form.reset()
    return response.json();
  }


  form.addEventListener('submit', event => {
    event.preventDefault();
    const formData = new FormData(event.currentTarget)

    // sending form data
    const multiSelectName = formData.get('select_way');
    formData.set('note', `Selected: ${multiSelectName ? multiSelectName : '- '}`)
    formData.delete('select_way')

    const newArray = [];
    formData.forEach((value, name) => {
      newArray.push([
        name, value
      ])
    })
    const parsedData = Object.fromEntries(newArray);

    console.log(parsedData);


    addUserData(formData)
      .then(data => console.log(data))
      .catch(error => console.log(error.message));



    // inputs and email validation
    let emailVal = inputEmail.value,
        emptyInputs = Array.from(jsInputs).filter(input => input.value === '');


    jsInputs.forEach(input => {
      if (input.value === '') {
        errorName.forEach(errorNameItem => {
          errorNameItem.classList.add('_error_fields')
        });
        input.classList.add('_error');
        multiSelectInput.classList.add('_error');
      } else {
        errorName.forEach(errorNameItem => {
          errorNameItem.classList.remove('_error_fields');
        })
        input.classList.remove('_error');
        multiSelectInput.classList.remove('_error');
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
})