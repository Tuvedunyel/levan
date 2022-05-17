const windowWidth = window.innerWidth;
const inputs = document.querySelectorAll("input");
const message = document.getElementById("message");
const phone = document.querySelector(".phone");

if (windowWidth <= 1056) {
  const menuBtn = document.getElementById("menu-btn");
  const headerMenu = document.getElementById("header-menu");
  const mainTitle = document.querySelector("h1");

  menuBtn?.addEventListener("click", () => {
    headerMenu?.classList.toggle("active");
    mainTitle?.classList.toggle("remove");

    if (headerMenu?.classList.contains("active")) {
      phone?.setAttribute("style", `display: flex; position: fixed; z-index: 50; top: 5%; right: 2%;`);
      setTimeout(() => {
        document.body.style.overflow = "hidden";
      }, 500);
    } else {
      document.body.style.overflow = "visible";
      menuBtn.style.transform = 'translateY(0)';
      phone?.setAttribute("style", `display: none; position: initial; z-index: unset; top: unset; right: unset;`);
    }
  });
} else {
  phone?.setAttribute('style', 'position: fixed; top: 6%; right: 0');
}

message?.addEventListener("focus", () => {
  transformLabel("message", true);
});

message?.addEventListener("blur", e => {
  const target = e.target as HTMLTextAreaElement;
  if (target.value.length === 0) {
    transformLabel("message", false);
  }
});

inputs?.forEach(input => {
  input.addEventListener("focus", e => {
    const target = e.target as HTMLInputElement;
    const name = target.name;
    transformLabel(name, true);
  });
  input.addEventListener("blur", e => {
    const target = e.target as HTMLInputElement;
    if (target.value.length === 0) {
      const name = target.name;
      transformLabel(name, false);
    }
  });
});

const transformLabel = (name: string, active: boolean) => {
  if (active) {
    const label = document.getElementById(`${name}-label`);
    label?.classList.add("active");
  } else {
    const label = document.getElementById(`${name}-label`);
    label?.classList.remove("active");
  }
};
