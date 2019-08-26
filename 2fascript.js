
 var endtime;
 function reqListener() {
	console.log(this.responseText);
	
	endtime =  this.responseText;
 }



 var oReq = new XMLHttpRequest ();
 oReq.addEventListener("load", reqListener);

 oReq.open("get", "expiryget.php", true);
 oReq.send();
 
 
 
 var timer = setInterval( function() {
	
	let now = new Date().getTime();
	let counter = endtime - now ;
	
	 if (counter >= 0)
	 {
		 let mins = Math.floor(counter / (1000 * 60));
		 let secs = Math.floor((counter % (1000 * 60))/1000);
		  
		  document.getElementById("mins").innerHTML = mins + "<span>mins </span>";
	 	document.getElementById("secs").innerHTML = ("0"+secs).slice(-2) + "<span> secs </span>";
	 }
	 else 
	 {document.getElementById("timer").innerHTML = "<div> Time up retry </div>";
	 }
 },1000);