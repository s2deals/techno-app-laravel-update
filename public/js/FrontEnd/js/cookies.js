const cookieContainer = document.querySelector(".cookie-container");
const cookieBtn = document.querySelector(".cookie-btn");
// const storageTime = 2;
// var currentTime = new Date().getTime();
// var setupTime = localStorage.getItem("setupTime");
cookieBtn.addEventListener("click", () => {
    cookieContainer.classList.remove("active");
    localStorage.setItem("cookieBannerDisplayed", "true");
    // localStorage.setItem("setupTime", currentTime);
});

setTimeout( () => {
    if (!localStorage.getItem("cookieBannerDisplayed")) {
        cookieContainer.classList.add("active");
    }
}, 2000);

// setTimeout( () => {
//     if(currentTime-setupTime > storageTime*60*60*1000 || setupTime == null){
//         cookieContainer.classList.add("active");
//         localStorage.clear();
//     }
// }, 2000);