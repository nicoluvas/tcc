// animações ao renderizar
gsap.from("#width-appear", {
    delay: 0.1,
    opacity: 0,
    duration: 0.5,
    width: 0,
    ease: "power1.inOut",
});
gsap.from("#oppacity-appear", {
    delay: 0.1,
    opacity: 0,
    duration: 0.5,
    ease: "power1.inOut",
});
gsap.from(".meshbg", {
    opacity: 0,
    y: 50,
    duration: 1.5,
    ease: "power1.inOut",
});

// animações das ancoras
let anim1 = gsap.timeline({ paused: true });
anim1.to("#btn1", { opacity: 0.1, scale: 0.8, x: 5, duration: 0.1, ease: Power2.easeInOut });
let anim2 = gsap.timeline({ paused: true });
anim2.to("#btn2", { opacity: 0.1, scale: 0.8, x: 5, duration: 0.1, ease: Power2.easeInOut });
let anim3 = gsap.timeline({ paused: true });
anim3.to("#btn3", { opacity: 0.1, scale: 0.8, x: 5, duration: 0.1, ease: Power2.easeInOut });

const btn1 = document.querySelector("#btn1");
btn1.addEventListener("click", () => {
    anim1.play().timeScale(1);
});
const btn2 = document.querySelector("#btn2");
btn2.addEventListener("click", () => {
    anim2.play().timeScale(1);
});
const btn3 = document.querySelector("#btn3");
btn3.addEventListener("click", () => {
    anim3.play().timeScale(1);
});

