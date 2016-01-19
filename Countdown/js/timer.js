(function(){

	var endtime = 'February 21 2016 12:00:00 GMT+00:00';

	function getTimeRemaining(endtime){
	  var t = Date.parse(endtime) - Date.parse(new Date());
	  var seconds = Math.floor( (t/1000) % 60 );
	  var minutes = Math.floor( (t/1000/60) % 60 );
	  var hours = Math.floor( (t/(1000*60*60)) % 24 );
	  var days = Math.floor( t/(1000*60*60*24) );
	  return {
	    'total': t,
	    'days': days,
	    'hours': hours,
	    'minutes': minutes,
	    'seconds': seconds
	  };
	}

	var clock = document.getElementById('clock');

	function updateClock(){
	  var t = getTimeRemaining(endtime);
	  clock.innerHTML = ('0' + t.hours).slice(-2) + ' : ' +
	                    ('0' + t.minutes).slice(-2)+ ' : ' +
	                    ('0' + t.seconds).slice(-2);
	  if(t.total<=0){
	    clearInterval(timeinterval);
	  }
	}

	updateClock(); // run function once at first to avoid delay
	var timeinterval = setInterval(updateClock,1000);

})()
