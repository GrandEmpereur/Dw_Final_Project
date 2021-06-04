//menu burger
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

// Fixed Nav
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

// Scroll To

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

// ############################## Dark Mode ##############################





