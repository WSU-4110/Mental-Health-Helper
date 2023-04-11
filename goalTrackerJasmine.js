(function(window) {
  
  function checkGoalInput(goal) {
    if (goal == "" || goal == " ") {
      return 'Oops I think you forgot to type in a goal';
    } else {
      return 'Correct Goal';
    }
  }

  function addGoal(goal) {
    var newItem = document.createElement("li");
    var goalText = document.createTextNode(goal);
    
    newItem.appendChild(goalText);
    return 'Goal Added';
  }

  function createSign(sign) {
    if (sign != "") {
      var newItem = document.createElement("li");
      var span = document.createElement("SPAN");
      var done = document.createTextNode(sign);
      span.className = "close";
      span.appendChild(done);
      newItem.appendChild(span);
      return 'Sign Created';
    }
    else {
      return 'Error';
    }
  }

  function completeGoal(action) {
    var list = document.querySelector('ul');
    if (action == 'click') {
      list.addEventListener(action, function(evt) {
        if (evt.target.tagName === 'LI') {
          evt.target.classList.toggle('checked');
        }
      });
      return "Completed"
    }
    else {
      return "Uncompleted"
    }
  }

  function signGoal(sign) {
    if (!createSign(sign)) {
        return 'Not added Sign';
    }
    else {
      for (i = 0; i < close.length; i++) {
        close[i].onclick = function() {
          var div = this.parentElement;
          div.style.display = "none";
        }
      }
      return 'Added Sign'
    }
  }

  function deleteGoal(action) {
    if (action == "close") {
    var trackerList = document.getElementsByTagName("LI");
    var i;
    for (i = 0; i < trackerList.length; i++) {
    var span = document.createElement("SPAN");
    var done = document.createTextNode("\u2612");
    span.className = action;
    span.appendChild(done);
    trackerList[i].appendChild(span);
    }

    var close = document.getElementsByClassName("close");
    var i;
    for (i = 0; i < close.length; i++) {
      close[i].onclick = function() {
        var div = this.parentElement;
        div.style.display = "none";
      }
    }
      return 'Deleted Successfully';
    }
    else {
      return 'Not deleted';
    }
  }
  
  window.checkGoalInput = checkGoalInput;
  window.addGoal = addGoal;
  window.createSign = createSign;
  window.completeGoal = completeGoal;
  window.signGoal = signGoal;
  window.deleteGoal = deleteGoal;

  
})(window);
