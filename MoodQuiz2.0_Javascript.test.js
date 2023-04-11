describe("findPromptWeight", () => {
    it("returns the correct weight for the group that it is", () => {
      const prompts = [      { prompt: 'prompt 1', weight: 1, class: 'group1' },      
      { prompt: 'prompt 2', weight: 2, class: 'group2' }, 
      { prompt: 'prompt 3', weight: -1, class: 'group3' },    ];
      expect(findPromptWeight(prompts, 'group1')).toBe(1);
      expect(findPromptWeight(prompts, 'group2')).toBe(2);
      expect(findPromptWeight(prompts, 'group3')).toBe(-1);
    });
    it("returns 0 when the prompt group is not found", () => {
      const prompts = [{ prompt: 'prompt', weight: 1, class: 'group' }];
      expect(findPromptWeight(prompts, 'nonexistent')).toBe(0);
    });
  });
  
  describe("findValueWeight", () => {
    it("returns the correct weight for each value", () => {
      const values = [      { value: 'Strongly Agree', class: 'class1', weight: 5 },     
       { value: 'Agree', class: 'class2', weight: 3 },      
       { value: 'Neutral', class: 'class3', weight: 0 },      
       { value: 'Disagree', class: 'class4', weight: -3 },     
       { value: 'Strongly Disagree', class: 'class5', weight: -5 },    ];
      expect(findValueWeight(values, 'Strongly Agree')).toBe(5);
      expect(findValueWeight(values, 'Agree')).toBe(3);
      expect(findValueWeight(values, 'Neutral')).toBe(0);
      expect(findValueWeight(values, 'Disagree')).toBe(-3);
      expect(findValueWeight(values, 'Strongly Disagree')).toBe(-5);
    });
  });
  
  
  describe("click", () => {
    it("displays the correct results when quiz is submitted", () => {
      total = 1;
      $('#submit-btn').click();
      expect($('#results').html()).toBe("<b>You could be depressed</b><br><br>You might be feeling depressed, that is why you are unhappy. To overcome this, you can look out for the symptoms of depression and consult a therapist accordingly. <br><br>Use our Helpful Links page for additional help\nbr><br>  We also have links and numbers to different doctors you can contact\n\n<br><br>Never be afraid to get help.");
      total = -1;
      $('#submit-btn').click();
      expect($('#results').html()).toBe("<b>You are feeling good today!</b><br><br>");
    });
  });
  
  