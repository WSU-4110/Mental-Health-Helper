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

button.addEventListener('click', function() {
    var randomQuotes = hello[Math.floor(Math.random() * hello.length)]
    output.innerHTML = randomQuotes;

})