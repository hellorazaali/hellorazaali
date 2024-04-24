let navLinks = document.querySelectorAll(".nav-link");
let sections = document.querySelectorAll("section");
let popup = document.querySelector(".pop-contain");
let closeBtn = document.querySelector(".close");
let menu = document.querySelector(".navbar i");
let nav = document.querySelector("nav");

let currentSec = "about";

window.addEventListener("scroll",()=>{
    sections.forEach((elem)=>{
        if(window.scrollY>=(elem.offsetTop - 200)){
            currentSec = elem.id;
        }
    });
    navLinks.forEach((item)=>{
        if (item.href.includes(currentSec)) {
            document.querySelector(".active").classList.remove("active");
            item.classList.add("active");
        }
    })
})

menu.addEventListener("click",()=>{
    document.querySelector("header nav").classList.add("open");
});
nav.addEventListener("click",()=>{
        document.querySelector("header nav").classList.remove("open");
})

console.clear();