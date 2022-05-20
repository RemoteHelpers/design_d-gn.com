
'use strict';

document.addEventListener('DOMContentLoaded', () => {

  $(document).ready(function () {
    $('#fullpage').fullpage({
      sectionsColor: ['#FFD200', '#FFDF48', '#FFDF48', '#FFDF48', '#FFDF48', '#FFDF48'],
      scrollingSpeed: 500
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
        topLine = dropdown.querySelector('.dropdown_line'),
        dropdownBtn = dropdown.querySelector('.dropdown_btn'),
        dropdownList = dropdown.querySelector('.dropdown_list'),
        dropdownArrow = dropdown.querySelector('.dropdown_arrow'),
        dropdownItem = dropdownList.querySelectorAll('.dropdown_item'),
        hiddenInput = dropdown.querySelector('.dropdown_input_hidden');

  form.addEventListener('click', event => {
    event.preventDefault();
  })


  dropdownItem.forEach(listItem => {
    listItem.addEventListener('click', event => {
      event.stopPropagation();
      dropdownBtn.innerText += listItem.innerText;
      hiddenInput.value += listItem.dataset.value;
      listItem.classList.add('dropdown_item_disabled')
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






})