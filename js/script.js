document.addEventListener("DOMContentLoaded", function(event) {
    const menubtn = document.getElementById("menu_button");
    const backbtn = document.getElementById("back_button");
    // const menu_icon = document.getElementById("menu_icon");
    const menu_dropdown = document.getElementById("mobile-menu");

    //menu button and menu wrap
    menubtn.addEventListener("click", () => {
        menu_dropdown.classList.toggle("hidden");
        if (menu_dropdown.classList.contains("hidden")){            
            menubtn.setAttribute("aria-expanded","false");
        }
        else{
            menubtn.setAttribute("aria-expanded","true");
        }
        // menu_icon.classList.toggle("transform");
        // menu_icon.classList.toggle("rotate-90");
    });

    backbtn.addEventListener("click", () => {
        history.back()
    });
});

document.getElementById("background").onload = function() {myFunction(background)};
function myFunction(x) {
  document.getElementById(x).style.height =  window.innerHeight;
}