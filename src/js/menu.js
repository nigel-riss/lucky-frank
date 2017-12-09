var $ = require("jquery");
var smoothScroll = require("jquery-smooth-scroll");

class MobileMenu {
    constructor() {
        this.mainNav = $(".main-nav");
        this.menuIcon = $(".menu-icon");
        this.menuLinks = $(".main-menu a");

        this.events();
        this.addSmoothScroll();
    }

    events() {
        this.menuIcon.on("click", () => { 
            this.toggleMenu();
        });
        this.menuIcon.on("tap", () => { 
            this.toggleMenu();
        });
        this.menuLinks.on("click", () => { 
            this.toggleMenu();
        });
        this.menuLinks.on("tap", () => { 
            this.toggleMenu();
        });
    }

    toggleMenu() {
        this.mainNav.toggleClass("main-nav--shown");
        this.menuIcon.toggleClass("menu-icon--close-x");
    }

    addSmoothScroll() {
        this.menuLinks.smoothScroll();
    }
}

let mobileMenu = new MobileMenu();