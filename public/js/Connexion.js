let displayForm = _('displayForm');
let forclient = _('forClient');
let clientForm = _('formEclient');
let forpro = _('forPro');
let proForm = _('formEprofessionnel');
let formContainer = _('formContainer');

displayForm.addEventListener('click', showform);

forclient.addEventListener('click', () => {
  forpro.classList.remove('active')
  forclient.classList.add('active')
  if(clientForm.classList.contains('toggleForm')){
    formContainer.style.transform = 'translate(0%)';
    formContainer.style.transition = 'transform .5s';
    proForm.classList.add('toggleForm');
    clientForm.classList.remove('toggleForm');
  }
})

forpro.addEventListener('click', () => {
  forclient.classList.remove('active')
  forpro.classList.add('active')
  if(proForm.classList.contains('toggleForm')){
    formContainer.style.transform = 'translate(-100%)';
    formContainer.style.transition = 'transform .5s';
    proForm.classList.remove('toggleForm');
    clientForm.classList.add('toggleForm');
  }
})

function _(e){
  return document.getElementById(e);
}

function showform() {
  document.querySelector('.form-wrapper .card').classList.toggle('show');
}
