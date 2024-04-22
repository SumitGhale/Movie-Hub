// divs
let profile = document.querySelector("#profile");
let watchlists = document.querySelector("#watchlists");
let your_lists = document.querySelector("#your_lists");
let account_settings = document.querySelector("#account_settings");
let logout = document.querySelector("#logout");
let sections = document.querySelectorAll(".section")

// buttons
let profile_btn = document.querySelector("#profile_btn");
let watchlists_btn = document.querySelector("#watchlists_btn");
let yourlists_btn = document.querySelector("#yourlists_btn");
let account_settings_btn = document.querySelector("#account_settings_btn");
let logout_btn = document.querySelector("#logout_btn");
let side_buttons = document.querySelectorAll(".side_btns");

profile_btn.addEventListener(('click'), () => {
    // console.log("profile butotn was clicked");
    reset();
    profile_btn.classList.add('active');
    profile_btn.classList.remove('link-body-emphasis');
    profile.style.display = 'block';
})

watchlists_btn.addEventListener(('click'), () => {
    // console.log("watchlists_btn butotn was clicked");
    reset();
    watchlists_btn.classList.add('active')
    watchlists_btn.classList.remove('link-body-emphasis');
    watchlists.style.display = 'block';
})

yourlists_btn.addEventListener(('click'), () => {
    // console.log("yourlists_btn butotn was clicked");
    reset();
    yourlists_btn.classList.add('active')
    yourlists_btn.classList.remove('link-body-emphasis');
    your_lists.style.display = 'block';
})

account_settings_btn.addEventListener(('click'), () => {
    // console.log("account_settings_btn butotn was clicked");
    reset();
    account_settings_btn.classList.add('active')
    account_settings_btn.classList.remove('link-body-emphasis');
    account_settings.style.display = 'block';
})

logout_btn.addEventListener(('click'), () => {
    // console.log("logout butotn was clicked");
    reset();
    logout_btn.classList.add('active')
    logout_btn.classList.remove('link-body-emphasis');
    logout.style.display = 'block';
})

function reset() {
    sections.forEach(function (section) {
        // Add CSS property to each element
        section.style.setProperty('display', 'none');
    });

    side_buttons.forEach(function (side_btn) {
        // Add CSS property to each element
        side_btn.classList.add('link-body-emphasis');
        side_btn.classList.remove('active');
    });

}
