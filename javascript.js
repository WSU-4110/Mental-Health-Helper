var quotes = [
    'All our dreams can come true, if we have the courage to pursue them. - Walt Disney',
    'Dont limit yourself. Many people limit themselves to what they think they can do. You can go as far as your mind lets you. What you believe, remember, you can achieve. - Mary Kay Ash',
    'If something is important enough, even if the odds are stacked against you, you should still do it. - Elon Musk',
    'Dreams dont work unless you do - John C. Maxwell',
    'Dont quit yet, the worst moments are usually followed by the most beautiful silver linings. You have to stay strong, remember to keep your head up and remain hopeful. - Unknown',
    'Good. Better. Best. Never let it rest. ’Til your good is better and your better is best. - St. Jerome'

]

function newQuote() {
    var randomNum = Math.floor(Math.random() * (quotes.length));
    document.getElementById('QuoteGenerator').innerHTML = quotes[randomNum];
}