$('.carousel').carousel({
  interval: 2000
})

window.addEventListener('load', () => {



  //hide preloader
  let loader = document.getElementById('pre-loader');
  if (loader) {
    loader.className += ' hidden'
  }


  //show nav
  document.getElementById('__menu_icon').addEventListener('click', () => {
    document.getElementById('__nav_ele').classList.toggle('d_block')
  });


  //hide nav
  document.getElementById('exit-menu').addEventListener('click', () => {
    document.getElementById('__nav_ele').classList.toggle('d_block')
  });

})

// show sub catagory
let c_elements=document.getElementsByClassName('__c_icon');

  for(let i=0; i < c_elements.length;i++){
    c_elements[i].addEventListener('click',(e)=>{
      e.target.classList.toggle('rotate');
     e.target.nextSibling.nextElementSibling.classList.toggle('d_block');
    })
  }

  // show popup
  // let isShowPopup = localStorage.getItem('isShowPopup');

  // if(localStorage.getItem('isShowPopup')){

  // }else{
  //   $('#pupUpModal').modal('show');
  //   localStorage.getItem('isShowPopup','true')
  // }
  $('#pupUpModal').modal('show');

  