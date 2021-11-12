const tl = gsap.timeline();
const tl2 = gsap.timeline();
CustomEase.create("pop", "M0,0 C0,0 0.264,1.438 0.264,1.266 0.264,1.039 0.363,0.534 0.57,0.516 0.771,0.498 1,1 1,1 ")

tl2
  .to('#dashed-paths', {
  opacity: 1,
  duration: 1,
  delay: 2.5
}, "<")
.to('#accent-circles', {
  opacity: 1,
  duration: 1
}, "<")
.to('#solid-line-accents', {
  opacity: 1,
  duration: 1
}, "<")

tl
  .set('svg', { opacity: 1 })
  .addLabel('leavesStart', 3)
  .addLabel('cogsStart', 0.43)
  .addLabel('brainPop', 2.25)
  .addLabel('treeStart', 2.7)
  .set('.color-circle, .plus-sign-accent', { scale: 0.01, opacity: 0, transformOrigin: "center"})
  .from("#pink-background-circle", {
  y: 500,
  scaleX: 2,
  scaleY: 2,
  transformOrigin: "center",
  duration: 2
})
  .fromTo("#head-outline", {
  drawSVG:"0"
}, {
  duration: 2, 
  drawSVG:"-100%",
  ease: "slow(0.9, 0.7, false)"
}, "<")
  .set("#cogs", {opacity: 1, duration: 0})
  .to("#brain-circle", {
    keyframes: [{ 
      y: -160,
      duration: 0.2
    }, {
      opacity: 0.25,
      scaleX: 10,
      scaleY: 9.5,
      ease: "pop",
      duration: 0.3,
      transformOrigin: "center"
    }, {
      opacity: 0,
      duration: 0.01
    }]
 }, "+=0.1")
  .to("#brain", {
    scaleX: 1.5,
    scaleY: 1.2,
    opacity: 1,
    duration: 0,
    transformOrigin: "center"
})
  .to("#brain", {
    scaleX: 1,
    scaleY: 1,
    opacity: 1,
    duration: 0.2,
    ease: "bounce.out",
    transformOrigin: "center"
})
.to('.color-circle, .plus-sign-accent', {
  scale: 0.8,
  ease: "pop",
  opacity: 1,
  transformOrigin: "center",
  duration: 0.5,
}, 'brainPop')
.to(".color-circle", {
  scale: 1.2,
  duration: 2,
  ease: "sine.inOut",
  stagger: {
    each: 0.5,
    repeat: -1,
    yoyo: true
  },
}, 'brainPop')
  .to('#tree-circle-left, #tree-circle-right', {
  opacity: 1,
  duration: 0
},'treeStart')
  .fromTo('#tree-base-right, #tree-base-left', {
  drawSVG: "0",
  opacity: 1
}, {
  drawSVG: "100%",
  ease: "slow(0.9, 0.7, false)",
  duration: 1.5
}, "+=0.01")
.to("#red-cog", {
  rotate: 360,
  transformOrigin: "center",
  repeat: -1,
  ease: "none",
  duration: 1.5
}, 'cogsStart')
.to("#red-cog", {
  ease: "power1.inOut",
  duration: 4,
  motionPath: {
    path: "#head-outline",
    align: "#head-outline",
    end: 0.75,
    alignOrigin: [0.5, 0.5]
  }
}, 'cogsStart')
.to("#blue-cog", {
  rotate: 360,
  transformOrigin: "center",
  repeat: -1,
  ease: "none",
  duration: 1.5
}, 'cogsStart')
.to("#blue-cog", {
  delay: 0.3,
  ease: "power1.inOut",
  duration: 4,
  motionPath: {
    path: "#head-outline",
    align: "#head-outline",
    end: 0.68,
    alignOrigin: [0.5, 0.5]
  }
}, 'cogsStart')
.to("#yellow-cog", {
  rotate: 360,
  transformOrigin: "center",
  repeat: -1,
  ease: "none",
  duration: 1.5
}, 'cogsStart')
.to("#yellow-cog", {
  delay: 0.6,
  ease: "power1.inOut",
  duration: 4,
  motionPath: {
    path: "#head-outline",
    align: "#head-outline",
    end: 0.43,
    alignOrigin: [0.5, 0.5]
  }
}, 'cogsStart')
.fromTo("#big-leaf-left", {
  opacity: 0,
  rotate: 45,
  scale: 0.01,
  transformOrigin: "bottom right"
}, {
  rotate: 0,
  opacity: 1,
  scale: 1,
  transformOrigin: "bottom right",
  ease: "power3.out",
  duration: 1.2
}, 'leavesStart')
.fromTo("#big-leaf-right", {
  opacity: 0,
  rotate: -45,
  scale: 0.01,
  transformOrigin: "bottom left"
}, {
  rotate: 0,
  opacity: 1,
  scale: 1,
  transformOrigin: "bottom left",
  ease: "power3.out",
  duration: 1.2,
}, 'leavesStart')
.fromTo("#med-leaf-left", {
  opacity: 0,
  rotate: 45,
  scale: 0.01,
  transformOrigin: "bottom right"
}, {
  rotate: 0,
  opacity: 1,
  scale: 1,
  transformOrigin: "bottom right",
  ease: "power3.out",
  duration: 1.2,
  delay: 0.4
}, 'leavesStart')
.fromTo("#med-leaf-right", {
  opacity: 0,
  rotate: -45,
  scale: 0.01,
  transformOrigin: "bottom left"
}, {
  rotate: 0,
  opacity: 1,
  scale: 1,
  transformOrigin: "bottom left",
  ease: "power3.out",
  duration: 1.2,
  delay: 0.4
}, 'leavesStart')
.fromTo("#small-leaf-left", {
  opacity: 0,
  rotate: 45,
  scale: 0.01,
  transformOrigin: "bottom right"
}, {
  rotate: 0,
  opacity: 1,
  scale: 1,
  transformOrigin: "bottom right",
  ease: "power3.out",
  duration: 1.2,
  delay: 0.85
}, 'leavesStart')
.fromTo("#small-leaf-right", {
  opacity: 0,
  rotate: -45,
  scale: 0.01,
  transformOrigin: "bottom left"
}, {
  rotate: 0,
  opacity: 1,
  scale: 1,
  transformOrigin: "bottom left",
  ease: "power3.out",
  duration: 1.2,
  delay: 0.85
}, 'leavesStart')
.fromTo("#plus-symbol", {
  opacity: 1,
  scale: 0.01,
  y: 25,
  transformOrigin: "bottom center",
}, {
  scale: 1,
  y: 0,
  transformOrigin: "bottom center",
  duration: 1,
  delay: 1
}, 'leavesStart')

