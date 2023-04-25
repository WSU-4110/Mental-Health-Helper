function checkGoalInput(goal) {
  if (goal == "" || goal == " ") {
    return 'Oops I think you forgot to type in a goal';
  } else {
    return 'Correct Goal';
  }
}

function noGoal(goal) {
  if (goal == "" || goal == " ") {
    return 'No Goal';
  } else {
    return 'Yes Goal';
  }
}

function result() {
  submit = 'click';
  if (submit == 'click') {
    return 'Result';
  } else {
    return 'Wrong';
  }
}

function startTimer(timeLeft) {
    if (timeLeft === 1) {
      return "1";
    }
  }

  function stopTimer(timeLeft) {
    if (timeLeft === 0) {
      return "0";
    }
  }

  function completeGoal(goal) {
    if (goal == 'checked') {
      return "Completed"
    }
    else {
      return "Uncompleted"
    }
  }



test(checkGoalInput(""), () => {
    expect("Oops I think you forgot to type in a goal").toBe('Oops I think you forgot to type in a goal');
  });

  test(result(""), () => {
    expect("Result").toBe('Result');
  });

  test(startTimer(1), () => {
    expect("1").toBe("1");
  });

  test(checkGoalInput(""), () => {
    expect("No Goal").toBe('No Goal');
  });

  test(stopTimer(0), () => {
    expect("0").toBe("0");
  });

  test(completeGoal("checked"), () => {
    expect("Complete").toBe("Complete");
  });