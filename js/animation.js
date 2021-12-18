const navSlide = () => {
  const burger = document.querySelector(".burger");
  const nav = document.querySelector(".nav-links");
  const navLinks = document.querySelectorAll(".nav-links li");

  //For loop to select each list since we can't pass muliple values on EventListener
  for (eachLi of navLinks) {
    eachLi.addEventListener("click", () => {
      nav.classList.toggle("nav-active");
      burger.classList.toggle(`toggle`);
    });
  }

  burger.addEventListener("click", () => {
    nav.classList.toggle("nav-active");

    burger.classList.toggle("toggle");

    //To Prevent Scroll for Drawer on Mobile Responsive
    nav.addEventListener(
      "touchmove",
      (nav) => {
        nav.preventDefault();
      },
      false
    );
  });
};
navSlide();
