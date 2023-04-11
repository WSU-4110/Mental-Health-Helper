describe('mainPage', function() {
    it('gives a quote for the day', function() {
      expect(quotes('click me!')).toEqual(hello);
    });
  
    it('open a window to twitter', function() {
      expect(gotolink1('Twitter')).toEqual('https://twitter.com');
    
    });
  
    it ('open a window to instagram', function() {
      expect(gotolink2('Instagram')).toEqual('https://www.Instagram.com');
    });
  
    it ('open a window to facebook', function() {
      expect(gotolink3('Facebook')).toEqual('https://www.facebook.com');
    });
  
    it('generates random quotes', function() {
      expect(random('click').toEqual('Randomized Successfully'));
    });
  
    it('gives a welcome sign', function() {
      expect(welcome().toEqual('Welcome to Your Helping Hand'));
    });
  
  
  });