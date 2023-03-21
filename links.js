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
