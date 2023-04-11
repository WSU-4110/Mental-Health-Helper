describe('goalTracker', function() {
  it('Checks if goal has been written', function() {
    expect(checkGoalInput(" ")).toEqual('Oops I think you forgot to type in a goal');
    expect(checkGoalInput("Workout")).toEqual('Correct Goal');
  });

  it('Checks if goal has been added', function() {
    expect(addGoal("Workout")).toEqual('Goal Added');
  });

  it('Checks if adding sign button works', function() {
    expect(createSign("\u2612")).toEqual('Sign Created');
    expect(createSign("")).toEqual('Error');
  });

  it('Checks goal completion', function() {
    expect(completeGoal('click')).toEqual('Completed');
    expect(completeGoal('clock')).toEqual('Uncompleted');
  });

  it('Checks if sign is at the end of each goal', function() {
    expect(signGoal('\u2612')).toEqual('Added Sign');
  });

  it('Checks if goal deletes', function() {
    expect(deleteGoal("close")).toEqual('Deleted Successfully');
  });

  
});