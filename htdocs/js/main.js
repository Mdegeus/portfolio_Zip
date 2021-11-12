import BoxModule from "../Modules/DefautlMessageBox.js"
const locationString = "" + window.location

console.log(locationString.substr(locationString.length - 4))
console.log(locationString.substr(locationString.length - 3))

if (locationString.substr(locationString.length - 4) !== "html" && locationString.substr(locationString.length - 3) !== "php") {
    new BoxModule("Welcome", "Welcome to my portfolio.", "Close") //// show a popup window with title, text, close button
}

const btnToTop = document.querySelector(".btn-back-top");
const btnTB = document.querySelector(".btn-timeBased");
const button = document.querySelector('.theme-switcher');

function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

btnToTop.addEventListener('click', topFunction);

if (localStorage.getItem('Theme') === null || localStorage.getItem('Theme') === "") {
    localStorage.setItem('Theme', 'dark-theme');
}

if (localStorage.getItem('Theme') === null || localStorage.getItem('Theme') === "") {
    localStorage.setItem('Theme', 'dark-theme');
}

if (localStorage.getItem('Theme') === "dark-theme") {
    button.textContent = "<Theme: Dark>";
} else {
    button.textContent = "<Theme: Light>";
}

button.addEventListener('click', function (e) {
    e.preventDefault();
    if (localStorage.getItem('Theme') === "dark-theme") {
        localStorage.setItem('Theme', "light-theme");
        document.documentElement.className = localStorage.getItem('Theme');
        button.textContent = "<Theme: Light>";

    } else {
        localStorage.setItem('Theme', "dark-theme");
        document.documentElement.className = localStorage.getItem('Theme');
        button.textContent = "<Theme: Dark>";
    }
});

document.documentElement.className = localStorage.getItem('Theme')


function SwitchWithTime() {
    if (localStorage.getItem('timeBased-Theme') === 'true') {
        const date = new Date();
        if (date.getHours() < 6 && date.getHours() > 22 || date.getHours() === 0) { //////////////// Test at night
            localStorage.setItem('Theme', "dark-theme");
            document.documentElement.className = localStorage.getItem('Theme');
            button.textContent = "<Theme: Dark>";
        } else {
            localStorage.setItem('Theme', "light-theme");
            document.documentElement.className = localStorage.getItem('Theme');
            button.textContent = "<Theme: Light>";
        }
    }
}

function timeBasedbtnClick() {
    btnTB.textContent = "timeBased: " + localStorage.getItem('timeBased-Theme');
}

btnTB.addEventListener('click', function () {
    if (localStorage.getItem('timeBased-Theme') === 'true') {
        localStorage.setItem('timeBased-Theme', false)
    } else {
        localStorage.setItem('timeBased-Theme', true)
        SwitchWithTime();
    }
    timeBasedbtnClick()
});

setInterval(SwitchWithTime, 1000)
timeBasedbtnClick()

setInterval(function () {
    const date = new Date();
    console.log(date.getHours());
}, 1000)