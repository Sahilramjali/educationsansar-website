
let toggleButtons = document.getElementsByClassName('toggle-button')[0];
let navbarLinks = document.getElementsByClassName('navbar-links')[0];

//listen event click sound in 3 bar icon
toggleButtons.addEventListener('click',() => {
    navbarLinks.classList.toggle('active');
})


//for popup message or modal 
let modal=document.getElementById("modal");
let modalbtn=document.getElementById("submit-feedback");
let closebtn=document.getElementById("close-btn");
//listen event click sound
modalbtn.addEventListener('click',openModal);
closebtn.addEventListener('click',closeModal);
window.addEventListener('click',outsideclick);
function openModal(){
   modal.style.display='block';
}
function closeModal(){
    modal.style.display='none';
}
function outsideclick(e){
   if(e.target==modal){
       modal.style.display='none';
    }
}
