const setManuPadding = () => {
  document.body.style.paddingTop = `${document.getElementById("main-menu").clientHeight}px`;
};

const setCircleToFormSubmitButton = () => {
  document.querySelector('form [type="submit"]').addEventListener(
    "click",
    (e) => {
      e.currentTarget.classList.add("loading");
    },
    false
  );

  document.addEventListener(
    "wpcf7mailsent",
    (e) => {
      setTimeout(() => {
        e.target.querySelector("button").classList.remove("loading");
      }, 300);
    },
    false
  );

  document.addEventListener(
    "wpcf7invalid",
    (e) => {
      setTimeout(() => {
        e.target.querySelector("button").classList.remove("loading");
      }, 300);
    },
    false
  );

  document.addEventListener(
    "wpcf7mailfailed",
    (e) => {
      setTimeout(() => {
        e.target.querySelector("button").classList.remove("loading");
      }, 300);
    },
    false
  );
};

const burgerMenu = () => {
  const burgerButton = document.querySelector("#burger");

  burgerButton.addEventListener("click", (e) => {
    document.querySelector(".menu-primary-menu-container").classList.toggle("active");
    e.currentTarget.classList.toggle("active");
    document.body.classList.toggle("active");
  });
};

document.addEventListener("DOMContentLoaded", () => {
  setManuPadding();
  loadMorePosts();
  setCircleToFormSubmitButton();
  burgerMenu();
});
