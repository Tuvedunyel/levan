"use strict";
const windowWidth = window.innerWidth;
const inputs = document.querySelectorAll("input");
const message = document.getElementById("message");
const labels = document.querySelectorAll(".label");
if (windowWidth <= 1056) {
    const menuBtn = document.getElementById("menu-btn");
    const headerMenu = document.getElementById("header-menu");
    const mainTitle = document.querySelector("h1");
    menuBtn?.addEventListener("click", () => {
        headerMenu?.classList.toggle("active");
        mainTitle?.classList.toggle("remove");
    });
}
message?.addEventListener("focus", () => {
    transformLabel("message", true);
});
message?.addEventListener("blur", e => {
    const target = e.target;
    if (target.value.length === 0) {
        transformLabel("message", false);
    }
});
inputs?.forEach(input => {
    input.addEventListener("focus", e => {
        const target = e.target;
        const name = target.name;
        transformLabel(name, true);
    });
    input.addEventListener("blur", e => {
        const target = e.target;
        if (target.value.length === 0) {
            const name = target.name;
            transformLabel(name, false);
        }
    });
});
const transformLabel = (name, active) => {
    if (active) {
        const label = document.getElementById(`${name}-label`);
        label?.classList.add("active");
    }
    else {
        const label = document.getElementById(`${name}-label`);
        label?.classList.remove("active");
    }
};
