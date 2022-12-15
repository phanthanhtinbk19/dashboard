var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".tin", {
    slidesPerView: 6,
    spaceBetween: 20,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

const popperButton = document.querySelector("#popper-button");
const popperPopup = document.querySelector("#popper-popup");
const popperArrow = document.querySelector("#popper-arrow");

let popperInstance = null;

//create popper instance
function createInstance() {
    popperInstance = Popper.createPopper(popperButton, popperPopup, {
        placement: "auto", //preferred placement of popper
        modifiers: [
            {
                name: "offset", //offsets popper from the reference/button
                options: {
                    offset: [60, 10],
                },
            },
            {
                name: "flip", //flips popper with allowed placements
                options: {
                    allowedAutoPlacements: ["bottom"],
                    rootBoundary: "viewport",
                },
            },
        ],
    });
}

//destroy popper instance
function destroyInstance() {
    if (popperInstance) {
        popperInstance.destroy();
        popperInstance = null;
    }
}

//show and create popper
function showPopper() {
    popperPopup.setAttribute("show-popper", "");
    popperArrow.setAttribute("data-popper-arrow", "");
    createInstance();
}

//hide and destroy popper instance
function hidePopper() {
    popperPopup.removeAttribute("show-popper");
    popperArrow.removeAttribute("data-popper-arrow");
    destroyInstance();
}

//toggle show-popper attribute on popper to hide or show it with CSS
function togglePopper() {
    if (popperPopup.hasAttribute("show-popper")) {
        hidePopper();
    } else {
        showPopper();
    }
}
//execute togglePopper function when clicking the popper reference/button
popperButton.addEventListener("click", function (e) {
    e.preventDefault();
    togglePopper();
});
