var settings = document.getElementById("settings-icon");
var settingPanel = document.getElementById("settings");
var colors = document.querySelectorAll(".color");
var body = document.body;
var mode_changer = document.getElementById("mode-change");
var menu_icon = document.getElementById("menu-icon");
var __menu = document.getElementById("navbar");
let go_to_top = document.getElementById("go-top");
var toggle_password = document.getElementById("togglePassword");
var password_input = document.getElementById("password");
/* 
this code is used to show or hide the menu 
*/
menu_icon.addEventListener("click", function () {
  __menu.classList.toggle("showed");
  if (!__menu.classList.contains("showed")) {
    this.style.left = "20px";
    this.classList.remove("fa-x");
    this.classList.add("fa-bars");
    this.style.color = "black";
  } else {
    this.style.left = "80%";
    this.classList.remove("fa-bars");
    this.classList.add("fa-x");
    this.style.color = "tomato";
  }
});
// show or hide setting by toggling a class
settings.onclick = function () {
  if (settingPanel.classList.contains("active")) {
    settingPanel.classList.remove("active");
  } else {
    settingPanel.classList.add("active");
  }
};
// !mode switch
window.onload = function () {
  if (mode_changer.hasAttribute("checked")) {
    document.documentElement.style.setProperty("--text-color", "#F5F5F5");
    document.documentElement.style.setProperty("--background-color", "#2A2B2E");
  } else {
    document.documentElement.style.setProperty("--text-color", "#2A2B2E");
    document.documentElement.style.setProperty("--background-color", "#F5F5F5");
  }
  if (localStorage.getItem("savedColor") == null) {
    document.documentElement.style.setProperty(
      "--main-color",
      "rgba(79, 155, 115, 1)"
    );
  }
};
mode_changer.addEventListener("click", function () {
  this.toggleAttribute("checked");
  if (this.hasAttribute("checked")) {
    document.documentElement.style.setProperty("--text-color", "#F5F5F5");
    document.documentElement.style.setProperty("--background-color", "#2A2B2E");
    localStorage.setItem("theme", "checked");
  } else {
    document.documentElement.style.setProperty("--text-color", "#2A2B2E");
    document.documentElement.style.setProperty("--background-color", "#F5F5F5");
    localStorage.setItem("theme", "");
  }
});

// * get the value of theme saved i  local storage
__theme = localStorage.getItem("theme");
if (__theme == "checked") {
  mode_changer.setAttribute("checked", "checked");
} else {
  mode_changer.removeAttribute("checked");
}

// !changing color
colors.forEach((color) => {
  color.addEventListener("click", function () {
    // Change the value of the CSS variable
    document.documentElement.style.setProperty(
      "--main-color",
      this.style.backgroundColor
    );
    const selectedColor = this.style.backgroundColor;
    localStorage.setItem("savedColor", selectedColor);
  });
});

// !! get saved color in local storage
const loadedColor = localStorage.getItem("savedColor");

// * set the color to --main-color

document.documentElement.style.setProperty("--main-color", loadedColor);
// ! go to top button
// functions occur win scrolling
window.onscroll = function () {
  if (scrollY <= 250) {
    go_to_top.style.display = "none";
  } else {
    go_to_top.style.display = "flex";
  }
};
go_to_top.addEventListener("click", function () {
  window.scrollTo(0, 0);
});
// ! login page code
toggle_password.addEventListener("click", function () {
  if (password_input.type == "password") {
    password_input.type = "text";
    this.classList.remove("fa-eye");
    this.classList.add("fa-eye-slash");
  } else {
    password_input.type = "password";
    this.classList.add("fa-eye");
    this.classList.remove("fa-eye-slash");
  }
});





// **dashboard code 
