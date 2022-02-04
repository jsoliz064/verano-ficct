let tl = gsap.timeline({
    repeat: 0,
});

tl.to(".card_1", { duration: 2, ease: "back.out", x: "100%" });
tl.to(".card_2", { duration: 2, ease: "back.out", x: "-100%" }, "-=2");
tl.to(".card_4", { duration: 2, ease: "back.out", x: "-100%" }, "-=2");
tl.to(".card_3", { duration: 2, ease: "back.out", x: "100%" }, "-=2");
