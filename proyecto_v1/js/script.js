const body = document.querySelector("body"),
    sidebar = body.querySelector(".sidebar"),
    toggle = body.querySelector(".toggle"),
    searchBtn = body.querySelector(".search-box"),
    modeSwitch = body.querySelector(".toggle-switch"),
    modeText = body.querySelector(".mode-text");

searchBtn.addEventListener("click", () =>{
    sidebar.classList.remove("close");
});

document.addEventListener("DOMContentLoaded",() => {
    toggle.addEventListener("click", () =>{
        sidebar.classList.toggle("close");
        
        searchBtn.addEventListener("click", () =>{
            sidebar.classList.remove("close");
        });
    });
});

 // active class

const navLinksEls = document.querySelectorAll('nav-link');

navLinksEls.forEach(navLinkEl =>{
    navLinkEl.addEventListener('click', () =>{
        navLinkEl.classList.add(active);
    });
});

document.addEventListener("DOMContentLoaded", () =>{
    loadDarkMode()
    modeSwitch.addEventListener("click", toggleDarkMode);
})

function toggleDarkMode(){
    body.classList.toggle('dark');

    if(body.classList.contains('dark')){
        modeText.innerText= "Light Mode";
    }else{
        modeText.innerText= "Dark Mode";
    }
    saveDarkMode(body.classList.contains('dark'))
}

function saveDarkMode(estado){
    localStorage.setItem("darkMode", estado)
}

function loadDarkMode() {
    const savedDarkMode = localStorage.getItem("darkMode") == "true";
    if(savedDarkMode) {
        body.classList.add('dark');

        if(body.classList.contains('dark')){
            modeText.innerText= "Light Mode";
        }else{
            modeText.innerText= "Dark Mode";
        }
    }
}