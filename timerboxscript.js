function _timer(callback)
{
/**Initialize variable */
var time = 0;
var flag = 0;
var timer_id;

//-- Start function
this.start = function(interval)
{
interval = (typeof(interval) !== 'undefined') ? interval : 1000;

if(flag == 0)
{

flag = 1;
timer_id = setInterval(function()
{
//-- Increment time one by one
time++;
if(time)
{
//Generate time
generateTime(time);
if(typeof(callback) === 'function') callback(time);
}

}, interval);
}
}
//-- Stop function
this.stop = function()
{
if(flag == 1)
{
flag = 0;
clearInterval(timer_id);
}
}
//-- Reset function. It will stop the timer if it is running and reset it to 0.
this.reset = function(sec)
{
this.stop();
sec = (typeof(sec) !== 'undefined') ? sec : 0;
time = sec;
generateTime(time);
}
//-- Get time
this.getTime = function()
{
return time;
}
//-- Get flag
this.getFlag
{
return flag;
}

function generateTime()
{
var second = time % 60;
var minute = Math.floor(time / 60) % 60;
var hour = Math.floor(time / 3600) % 60;

second = (second < 10) ? '0'+second : second;
minute = (minute < 10) ? '0'+minute : minute;
hour = (hour < 10) ? '0'+hour : hour;

document.getElementById('seconds').innerHTML = second;
document.getElementById('minutes').innerHTML = minute;
document.getElementById('hours').innerHTML = hour;
}
}

var timer;

window.onload = function(){
timer = new _timer
(
function(time)
{
if(time == 0)
{
timer.stop();
}
}
);
timer.reset(0);
}



const textWrapper = document.querySelector('.rise');
  textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");


  anime.timeline()
  .add({
    targets: '.rise .letter',
    translateY: [100,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1400,
    delay: (el, i) => 300 + 30 * i
  }).add({
    targets: '.rise .letter',
    translateY: [0,-100],
    opacity: [1,0],
    easing: "easeInExpo",
    duration: 1200,
    delay: (el, i) => 100 + 30 * i
  });
 
