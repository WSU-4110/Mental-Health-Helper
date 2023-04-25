describe("CollapsibleFactory", function() {
    var factory;
  
    beforeEach(function() {
      factory = new CollapsibleFactory();
    });
  
    describe("createCollapsible", function() {
      it("should return a new Collapsible object", function() {
        var element = document.createElement("div");
        var collapsible = factory.createCollapsible(element);

        expect(collapsible).toEqual(jasmine.any(Collapsible));
      });
    });
  });
  
  describe("Collapsible", function() {
    var element, collapsible;
  
    beforeEach(function() {
      element = document.createElement("div");
      element.className = "collapsible";
      document.body.appendChild(element);
      collapsible = new Collapsible(element);
    });
  
    afterEach(function() {
      document.body.removeChild(element);
    });
  
    describe("toggle", function() {
      it("should set the maxHeight of the next element to 'null' when it's already set", function() {
        var content = document.createElement("div");
        content.style.maxHeight = "10px";
        element.parentNode.insertBefore(content, element.nextSibling);
        collapsible.toggle();
        expect(content.style.maxHeight).toBe('');
      });
  
      it("should set the maxHeight of the next element to its scroll height when it's not set", function() {
        var content = document.createElement("div");
        content.style.height = "10px";
        element.parentNode.insertBefore(content, element.nextSibling);
        collapsible.toggle();
        expect(content.style.maxHeight).toBe(content.scrollHeight + "px");
      });
    });
  });

  describe("animateLettersIn function", function() {
  it("should animate each letter in the textWrapper element to fade in", function() {
    
    const textWrapper = document.createElement("div");
    textWrapper.innerHTML = "<span class='letter'>H</span><span class='letter'>e</span><span class='letter'>l</span><span class='letter'>l</span><span class='letter'>o</span>";
    
    const targets = textWrapper.querySelectorAll(".letter");
    
    
    animateLettersIn(targets, function() {
      targets.forEach(function(target) {
        expect(target.style.opacity).toBe("1");
        expect(target.style.transform).toMatch(/translateY\(\d+px\)/);
      });
    });
  });
});

describe("animateLettersOut function", function() {
  it("should animate each letter in the textWrapper element tofade out", function() {
    
    const textWrapper = document.createElement("div");
    textWrapper.innerHTML = "<span class='letter'>H</span><span class='letter'>e</span><span class='letter'>l</span><span class='letter'>l</span><span class='letter'>o</span>";
    
    const targets = textWrapper.querySelectorAll(".letter");
    targets.forEach(function(target) {
      target.style.opacity = "1";
      target.style.transform = "translateY(0px)";
    });
    
    animateLettersOut(targets, function() {
      targets.forEach(function(target) {
        expect(target.style.opacity).toBe("0");
        expect(target.style.transform).toMatch(/translateY\(\d+px\)/);
      });
      done();
    });
  });
});





  
