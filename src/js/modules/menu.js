export class MobileMenu {
  constructor() {
    this.mainNav = document.querySelector(`.main-nav`);
    this.menuIcon = document.querySelector(`#menu-icon`);
    this.menuClose = document.querySelector(`#menu-close`);
    this.menuLinks = document.querySelectorAll(`.main-menu a`);

    this.menuIcon?.addEventListener(`click`, () => {
      this.toggleMenu();
    });

    this.menuClose?.addEventListener(`click`, () => {
      this.mainNav?.classList.remove(`main-nav--shown`);
      this.menuIcon?.classList.remove(`menu-icon--close-x`);
    });

    this.menuLinks?.forEach((link) => {
      link.addEventListener(`click`, () => {
        this.toggleMenu();
      })
    });
  }

  toggleMenu() {
    this.mainNav?.classList.toggle(`main-nav--shown`);
    this.menuIcon?.classList.toggle(`menu-icon--close-x`);
  }
}
