gsap.from(".width-appear", {
  delay: 0.1,
  opacity: 0,
  duration: 0.5,
  width: 0,
  ease: "power1.inOut",
});
gsap.from(".oppacity-appear", {
  delay: 0.1,
  opacity: 0,
  duration: 0.5,
  ease: "power1.inOut",
});
gsap.from(".left-appear", {
  delay: 0.1,
  opacity: 0,
  duration: 0.5,
  x: 25,
  ease: "power1.inOut",
});
gsap.from("#meshbg", {
  opacity: 0,
  y: 50,
  duration: 1.5,
  ease: "power1.inOut",
});
// const t = gsap.timeline({ repeat: -1 });
// t.fromTo(".wave",
//   { x: -50 },
//   { x: 1400, duration: 20, ease: "ease" }
// );

