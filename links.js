function CollapsibleFactory() {}

CollapsibleFactory.prototype.createCollapsible = function(element) {
  return new Collapsible(element);
};

function Collapsible(element) {
  this.element = element;
  this.element.addEventListener("click", this.toggle.bind(this));
}

Collapsible.prototype.toggle = function() {
  this.element.classList.toggle("active");
  var content = this.element.nextElementSibling;
  if (content.style.maxHeight) {
    content.style.maxHeight = null;
  } else {
    content.style.maxHeight = content.scrollHeight + "px";
  }
};

var coll = document.getElementsByClassName("collapsible");
var collapsibleFactory = new CollapsibleFactory();
var collapsibles = [];

for (var i = 0; i < coll.length; i++) {
  var collapsible = collapsibleFactory.createCollapsible(coll[i]);
  collapsibles.push(collapsible);
}


  const textWrapper = document.querySelector('.rise');
  textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");


  anime.timeline()
  .add({
    targets: '.rise .letter',
    translateY: [100,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1400,
    delay: (el, i) => 300 + 30 * i
  }).add({
    targets: '.rise .letter',
    translateY: [0,-100],
    opacity: [1,0],
    easing: "easeInExpo",
    duration: 1200,
    delay: (el, i) => 100 + 30 * i
  });
 

/*
function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);
*/