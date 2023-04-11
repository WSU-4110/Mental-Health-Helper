(function(window) {

    function quotes() {
      let button = document.getElementById('button');
      let output = document.getElementById('output');
      let hello = [
          '"Take every day as a chance to become a better person"',
          '"Success is not final; failure is not fatal: It is the courage to continue that counts"',
          '"Don’t let yesterday take up too much of today"',
          '"When we strive to become better than we are, everything around us becomes better too"',
          '"Think like a queen. A queen is not afraid to fail. Failure is another stepping stone to greatness"',
          '"Mental health...is not a destination, but a process. It iss about how you drive, not where you are going"',
          '"Everyone will have their story to tell when you find the light under the dark tunnel"',
          '"This is just a small obstacles to a bigger and brigther future"'
      ];
  
      return hello;
    }
  
    function gotoLink1 (link1) {
      console.log(link1.value);
      window.open(link1.value);
  
      return https://twitter.com;
    }
  
    function gotoLink2 (link2) {
      console.log(link2.value);
      window.open(link2.value);
  
      return https://www.Instagram.com;
    }
  
    function gotoLink3 (link3) {
      console.log(link3.value);
      window.open(link3.value);
  
      return https://www.facebook.com;
    }
  
    function random() {
      button.addEventListener('click', function() {
          var randomQuotes = hello[Math.floor(Math.random() * hello.length)]
          output.innerHTML = randomQuotes;
  
          return "Randomized Successfully";
      
      })
    }
  
    function welcome () {
      var typed = new Typed(".auto-type", {
          strings: ["Need", "Welcome to Your Helping Hand"],
          typeSpeed: 150, 
      })
  
      return "Welcome to Your Helping Hand";
    }
  
    window.quotes = quotes;
    window.gotoLink1 = gotoLink1;
    window.gotoLink2 = gotoLink2;
    window.gotoLink3 = gotoLink3;
    window.random = random;
    window.welcome = welcome;
    
  })(window);
  