'use strict';

document.addEventListener('DOMContentLoaded', () => {
  // fullpage initialization
  new fullpage('#fullpage', {
    anchors: ['page1', 'page2', 'page3', 'page4', 'page5', 'page6', 'page7', 'page8'],
    scrollingSpeed: 1000,
    licenseKey: '4358BF2E-3FE0429E-BF643872-85B662FF',
    scrollOverflow: true,
    onLeave: function(origin, destination, direction, trigger){
      let leavingSection = this;
      const scrollTop = document.querySelector('.scroll_btn');
      if(origin.index == 0 && direction =='down'){
        scrollTop.classList.add('show_top_btn');
      }
      else if(origin.index == 1 && direction == 'up'){
        scrollTop.classList.remove('show_top_btn');
      }
    }
  });

  // swiper initialisation
  new Swiper('.design_swiper', {
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    loop: true
  });

  // scroll-Top button
  const scrollTop = document.querySelector('.scroll_btn');
  scrollTop.addEventListener('click', () => {
    fullpage_api.moveTo('page1');
    scrollTop.classList.remove('show_top_btn');
  });

  // multiselect initialisation
  let sel = document.querySelectorAll('select');
  M.FormSelect.init(sel);

  // placeholder for multi-select
  document.querySelector('.select-dropdown').placeholder = "SERVICES";

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

  // add name and classes for multi-select
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
      // alert('Data sent successfully!');
      const dataModal = document.querySelectorAll('.thank_you_modal'),
        section = document.querySelectorAll('.section'),
        closeCalendly = document.querySelectorAll('.close_modal');

      dataModal.forEach(item => {
        item.classList.add('active_modal');
      })
      section.forEach(sectionItem => {
        sectionItem.classList.add('lock')
      })

      closeCalendly.forEach(item => {
        item.addEventListener('click', () => {

          dataModal.forEach(item => {
            item.classList.remove('active_modal');
          })

          section.forEach(sectionItem => {
            sectionItem.classList.remove('lock')
          })
        });
      })
      document.addEventListener('keydown', event => {
        if (event.key === 'Escape') {
          dataModal.classList.remove('active_modal')
          section.forEach(sectionItem => {
            sectionItem.classList.remove('lock')
          })
        }
      })
      errorName.forEach(errorNameItem => {
        errorNameItem.classList.remove('_error_fields');
      })
    }
    form.reset();
    return response.json();
  }

  form.addEventListener('submit', event => {
    event.preventDefault();
    const formData = new FormData(event.currentTarget);

    // add multi-select field
    const multiSelectName = formData.get('select_way');
    formData.set('note', `Selected: ${multiSelectName ? multiSelectName : '- '}`);
    formData.delete('select_way');

    const newArray = [];
    formData.forEach((value, name) => {
      newArray.push([
        name, value
      ])
    });
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
  const burgerBtn = document.querySelectorAll('.burger'),
    burgerClose = document.querySelectorAll('.close_burger'),
    sectionSlide = document.querySelectorAll('.section');

  burgerBtn.forEach(item => {
    item.addEventListener('click', e => {
      e.preventDefault();
      const menuId = item.getAttribute('data-id');
      const burgerModal = document.querySelector('.burger_content[data-id="' + menuId + '"]');
      sectionSlide.forEach(item => {
        item.classList.add('lock')
      })
      fullpage_api.setAllowScrolling(false);
      burgerModal.classList.add('_burger_active');
      burgerClose.forEach(close => {
        close.addEventListener('click', () => {
          fullpage_api.setAllowScrolling(true);
          burgerModal.classList.remove('_burger_active');
          sectionSlide.forEach(item => {
            item.classList.remove('lock')
          })
        })
      })
      document.addEventListener('keydown', event => {
        if (event.key === "Escape") {
          fullpage_api.setAllowScrolling(true);
          burgerModal.classList.remove('_burger_active');
          sectionSlide.forEach(item => {
            item.classList.remove('lock')
          })
        }
      })
    })
  })

  // calendly modal
  const priceBtn = document.querySelectorAll('.price_btn'),
    calendlyClose = document.querySelectorAll('.calendly_close');

  priceBtn.forEach(item => {
    item.addEventListener('click', event => {
      event.preventDefault();

      let modalId = item.getAttribute('data-modal');
      let modal = document.querySelector('.card_price_modal_calendly[data-modal="' + modalId + '"]');
      fullpage_api.setAllowScrolling(false);
      modal.classList.add('active_calendly');
      calendlyClose.forEach(item => {
        item.addEventListener('click', () => {
          fullpage_api.setAllowScrolling(true);
          console.log('cross clicked', item);
          modal.classList.remove('active_calendly');
        })
      })
      document.addEventListener('keydown', event => {
        if (event.key === "Escape") {
          fullpage_api.setAllowScrolling(true);
          modal.classList.remove('active_calendly');
        }
      })
    })
  })
})