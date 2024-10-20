document.addEventListener("DOMContentLoaded", (event) => {
  setTimeout(() => {
    gsap.from("#meshbg", {
      delay: 0.5,
      opacity: 0,
      y: 100,
      duration: 2.5,
      ease: "power1.inOut",
    });
    gsap.from(".pessoa#a", {
      delay: 0.3,
      opacity: 0,
      y: 10,
      duration: 0.5,
      ease: "power1.inOut",
    });
    gsap.from(".letreiro", {
      opacity: 0,
      y: 10,
      duration: 0.5,
      ease: "power1.inOut",
    });
  }, 100); 
});
