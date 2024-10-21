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
gsap.onClick(".hrefs", {
    opacity: 0.9,
    duration: 0.5,
    ease: "power1.inOut",
});
console.log("a")