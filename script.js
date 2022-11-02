// Light Mode or Dark Mode
function lightMode() {
  const isLight = document.body.classList.toggle("light-theme");
  let icon = document.getElementById("icon-mode");
  let mode = "";
  if (isLight) {
    mode = "Light Mode";
    icon = "images/sun.png";
  } else {
    mode = "Dark Mode";
    icon = "images/moon.png";
  }
  // Manipulasi DOM 1
  document.getElementById("change-mode").innerHTML = mode;
  document.getElementById("icon-mode").src = icon;
}

// Pop Up
function popUp() {
  alert("To Be Continue ...");
}

// AddEventListener
const button = document.querySelector(".btn-more");
button.addEventListener("click", function view() {
  let read = "";
  const teks = document.querySelector(".teks");
  if (teks.style.display == "block") {
    // Manipulasi DOM 2
    teks.style.display = "none";
    read = "Read More <i class='uil uil-arrow-right'></i>";
  } else {
    teks.style.display = "block";
    read = "Read Less <i class='uil uil-arrow-right'></i>";
  }
  document.querySelector(".btn-more").innerHTML = read;
  document.querySelector(".btn-more").style.padding = "8px 4px 8px 8px";
});
