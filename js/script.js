// ########################### Menu Burger ###########################
//selecting all required elements
const menu = document.querySelector(".menu");
const navOpen = document.querySelector(".hamburger");
const navClose = document.querySelector(".close");
const navLeft = menu.getBoundingClientRect().left;

navOpen.addEventListener("click", () => { //initialisation de l'evenement clik   
  if (navLeft < 0) {
    menu.classList.add("show"); // une fois qu'on click sur l'icone le menue apparait
    document.body.classList.add("show");
    navBar.classList.add("show");
  }
});

navClose.addEventListener("click", () => { //initialisation de l'evenement clik 
  if (navLeft < 0) {
    menu.classList.remove("show"); // une fois qu'on click sur l'icone le menue dispartait
    document.body.classList.remove("show");
    navBar.classList.remove("show");
  }
});

// ########################### Nav  ###########################
//selecting all required elements
const navBar = document.querySelector(".nav");
const navHeight = navBar.getBoundingClientRect().height;

window.addEventListener("scroll", () => { // initialisation de l'evenement scroll 
  const scrollHeight = window.pageYOffset;
  if (scrollHeight > navHeight) { // si le scrole et sup a la tail te la nav 
    navBar.classList.add("fix-nav"); // on ajouter la propriéte fix-nav
  }else { // sinon 
    navBar.classList.remove("fix-nav"); // on retire la propréte fix-nav
  } 
});

// ########################### Scrole ###########################

const links = [...document.querySelectorAll(".scroll-link")];
links.map(link => {
  link.addEventListener("click", e => {

    const id = e.target.getAttribute("href").slice(1);
    const element = document.getElementById(id);
    const fixNav = navBar.classList.contains("fix-nav");
    let position = element.offsetTop - navHeight;

    window.scrollTo({
      top: position,
      left: 0,
    });

    navBar.classList.remove("show");
    menu.classList.remove("show");
    document.body.classList.remove("show");
  });
});

// ########################### Gallery ###########################

//selecting all required elements
const filterItem = document.querySelector(".items");
const filterImg = document.querySelectorAll(".gallery .image");

window.onload = ()=>{ //after window loaded
  filterItem.onclick = (selectedItem)=>{ //if user click on filterItem div
    if(selectedItem.target.classList.contains("item")){ //if user selected item has .item class
      filterItem.querySelector(".active").classList.remove("active"); //remove the active class which is in first item
      selectedItem.target.classList.add("active"); //add that active class on user selected item
      let filterName = selectedItem.target.getAttribute("data-name"); //getting data-name value of user selected item and store in a filtername variable
      filterImg.forEach((image) => {
        let filterImges = image.getAttribute("data-name"); //getting image data-name value
        //if user selected item data-name value is equal to images data-name value
        //or user selected item data-name value is equal to "all"
        if((filterImges == filterName) || (filterName == "all")){
          image.classList.remove("hide"); //first remove the hide class from the image
          image.classList.add("show"); //add show class in image
        }else{
          image.classList.add("hide"); //add hide class in image
          image.classList.remove("show"); //remove show class from the image
        }
      });
    }
  }
  for (let i = 0; i < filterImg.length; i++) {
    filterImg[i].setAttribute("onclick", "preview(this)"); //adding onclick attribute in all available images
  }
}

//fullscreen image preview function
//selecting all required elements
const previewBox = document.querySelector(".preview-box"),
categoryName = previewBox.querySelector(".title p"),
previewImg = previewBox.querySelector("img"),
closeIcon = previewBox.querySelector(".icon"),
shadow = document.querySelector(".shadow");

function preview(element){
  //once user click on any image then remove the scroll bar of the body, so user can't scroll up or down
  document.querySelector("body").style.overflow = "hidden";
  let selectedPrevImg = element.querySelector("img").src; //getting user clicked image source link and stored in a variable
  let selectedImgCategory = element.getAttribute("data-name"); //getting user clicked image data-name value
  previewImg.src = selectedPrevImg; //passing the user clicked image source in preview image source
  categoryName.textContent = selectedImgCategory; //passing user clicked data-name value in category name
  previewBox.classList.add("show"); //show the preview image box
  shadow.classList.add("show"); //show the light grey background
  closeIcon.onclick = ()=>{ //if user click on close icon of preview box
    previewBox.classList.remove("show"); //hide the preview box
    shadow.classList.remove("show"); //hide the light grey background
    document.querySelector("body").style.overflow = "auto"; //show the scroll bar on body
  }
}



// ########################### WYSIWIG pl ###########################

$(document).ready(function() {
  $('#summernote').summernote({
    placeholder: 'Ready Your message',
    tabsize: 2,
    height: 250,
    toolbar: [
      ['style', ['style']],
      ['font', ['bold', 'underline', 'clear']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['table', ['table']],
      ['insert', ['link', 'picture', 'video']],
      ['view', ['fullscreen', 'codeview', 'help']]
    ]
  });
});

// ########################### Login ###########################

const loginText = document.querySelector(".title-text .login");
const loginForm = document.querySelector("form.login");
const loginBtn = document.querySelector("label.login");
const signupBtn = document.querySelector("label.signup");
const signupLink = document.querySelector("form .signup-link a");
signupBtn.onclick = (()=>{
loginForm.style.marginLeft = "-50%";
loginText.style.marginLeft = "-50%";
});
loginBtn.onclick = (()=>{
loginForm.style.marginLeft = "0%";
loginText.style.marginLeft = "0%";
});
signupLink.onclick = (()=>{
signupBtn.click();
return false;
});
