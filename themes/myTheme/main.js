


let tl = gsap.timeline({
  scrollTrigger: {
    trigger: ".mainSection",
    start: "0%",
    end: "100%",
    scrub: 1,
  },
});

let tl2 = gsap.timeline({
  scrollTrigger: {
    trigger: ".mainSection",
    start: "0%",
    end: "100%",
    scrub: 0,
  },
});
let tl5 = gsap.timeline({
  scrollTrigger: {
    trigger: '.mainSection',
    start: '0%',
    end: '50%',
    scrub: 0
  }
})

let tl4 = gsap.timeline({
  scrollTrigger: {
    trigger: ".mainSection",
    start: "0%",
    end: "100%",
    scrub: 1,
  },
});


tl4.fromTo(
  ".square",
  { left: "70%" },
  { left: "100%", opacity: 0, rotation: 90 }
);

tl5.fromTo(
  '.subtitle',
  {scale: 1},{scale: 0, opacity:0}
)
tl.fromTo(".slidingText", { y: 0 }, { y: -400 });
tl2.fromTo(
  ".logo",
  { scale: 6 },
  { scale: 1, top: "1.7rem", left: "3rem", x: "50%", y: "50%" }
);

let tl3 = gsap.timeline({
  scrollTrigger: {
    trigger: ".mainSection",
    start: "0%",
    end: "400%",
    scrub: 1,
    pin: true,
    pinSpacing: false,
  },
});



