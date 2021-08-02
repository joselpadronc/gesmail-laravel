const Axios = require('axios');

require('./bootstrap');

// LOADER
function showLoader() {
  setTimeout(() => {
    let loader = document.getElementById('loader');
    loader.classList.add('hidden');
  }, 500)
}
window.addEventListener("load", function() {
  showLoader()
});

// AXIOS
let token = document.querySelector('meta[name="csrf-token"]').content;
Axios.defaults.headers.common['X-CSRF-TOKEN'] = token;

let baseUrl = document.querySelector('meta[name="base-url"]').content;

// Menu lateral
const showMenu = document.getElementById('showMenu');
const hideMenu = document.getElementById('hideMenu');
const lateralMenu = document.getElementById('lateralMenu');
showMenu.addEventListener('click', () => lateralMenu.classList.toggle('hidden'))
hideMenu.addEventListener('click', () => lateralMenu.classList.toggle('hidden'))

// Modales
let showModalNewMail = document.getElementById('showModalNewMail');
let containerModalNewMail = document.getElementById('containerModalNewMail');
let newMailBtn = document.getElementById('newMailBtn');
let nameMail = document.getElementById('nameEmail');
let closeModalEmail = document.getElementById('closeModalEmail');
let spinBtnEmail = document.getElementById('spinBtnEmail');

showModalNewMail.addEventListener('click', () => containerModalNewMail.classList.remove('hidden'));
closeModalEmail.addEventListener('click', () => containerModalNewMail.classList.add('hidden'));

newMailBtn.addEventListener('click', (event) => {
  event.preventDefault();
  if(nameMail.value === "") {
    alert('El campo esta vacio, por favor llenar de informacion e intente de nuevo');
  }else {
    let data = {
      name: nameMail.value
    }
    newCompanyBtn.disabled = true;
    spinBtnEmail.classList.remove('hidden')
    axios.post(`${baseUrl}companies`, data)
      .then((response) => {
        if(response.status == 200) {
          setTimeout(() => {
            spinBtnEmail.classList.add('hidden')
            closeModalEmail.click();
          }, 400);
        }
      })
      .catch((err) => console.error(err));
  }
});

let showModalNewCompany = document.getElementById('showModalNewCompany');
let containerModalNewCompany = document.getElementById('containerModalNewCompany');
let newCompanyBtn = document.getElementById('newCompanyBtn');
let nameCompany = document.getElementById('nameCompany');
let closeModalCompany = document.getElementById('closeModalCompany');
let spinBtnCompany = document.getElementById('spinBtnCompany');

showModalNewCompany.addEventListener('click', () => containerModalNewCompany.classList.remove('hidden'));
closeModalCompany.addEventListener('click', () => containerModalNewCompany.classList.add('hidden'));

newCompanyBtn.addEventListener('click', (event) => {
  event.preventDefault();
  if(nameCompany.value === "") {
    alert('El campo esta vacio, por favor llenar de informacion e intente de nuevo');
  }else {
    let data = {
      name: nameCompany.value
    }
    newCompanyBtn.disabled = true;
    spinBtnCompany.classList.remove('hidden')
    axios.post(`${baseUrl}companies`, data)
      .then((response) => {
        if(response.status == 200) {
          setTimeout(() => {
            spinBtnCompany.classList.add('hidden')
            closeModalCompany.click();
          }, 400);
        }
      })
      .catch((err) => console.error(err));
  }
});