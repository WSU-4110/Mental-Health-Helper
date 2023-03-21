
class GoalEditor {
  addGoal(goalNumber) {
      var items = document.createElement("item");
      var goal = document.getElementById("goal").value;
      var added = document.createTextNode(goal);
      items.append(added);

      if (goal == "" || goal == " ") {
          alert("Oops I think you forgot to type in a goal");
          alert("It's " + goalNumber + "!");
      }
      else {
          document.getElementById("goalList").appendChild(items);
      }
  }
}

class oneGoal {
  goalNum1 = addGoal(1);
  alert(goalNum1);
}

class fourGoal {
  goalNum4 = addGoal(4);
  alert(goalNum4);
}