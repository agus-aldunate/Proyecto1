  function hfindex(){
    $("#header").load("header.html"); 
    $("#footer").load("footer.html"); 
    $("#navbar").load("navbar.php"); 
  };

  function hfabout(){
    $("#header").load("../header.html"); 
    $("#footer").load("../footer.html"); 
    $("#navbar").load("../navbar.php"); 
  };


  function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
      txtValue = a[i].textContent || a[i].innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        a[i].style.display = "";
      } else {
        a[i].style.display = "none";
      }
    }
  }


        filterSelection("all")
        function filterSelection(c) {
          var x, i;
          x = document.getElementsByClassName("column");
          if (c == "all") c = "";
          for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
          }
        }
        
        function w3AddClass(element, name) {
          var i, arr1, arr2;
          arr1 = element.className.split(" ");
          arr2 = name.split(" ");
          for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
          }
        }
        
        function w3RemoveClass(element, name) {
          var i, arr1, arr2;
          arr1 = element.className.split(" ");
          arr2 = name.split(" ");
          for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
              arr1.splice(arr1.indexOf(arr2[i]), 1);     
            }
          }
          element.className = arr1.join(" ");
        }


        // Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


function Datefortravel(){

  // Set the date we're counting down to
  var countDownDate = new Date("Jan 5, 2021 00:00:00").getTime();
  
  // Update the count down every 1 second
  var countdownfunction = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
      clearInterval(countdownfunction);
      document.getElementById("demo").innerHTML = "EXPIRED";
    }
  }, 1000);
}
function Datefortravel1(){

  // Set the date we're counting down to
  var countDownDate = new Date("Jan 10, 2021 00:00:00").getTime();
  
  // Update the count down every 1 second
  var countdownfunction = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo1").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
      clearInterval(countdownfunction);
      document.getElementById("demo").innerHTML = "EXPIRED";
    }
  }, 1000);
}
function Datefortravel2(){

  // Set the date we're counting down to
  var countDownDate = new Date("Jan 20, 2021 00:00:00").getTime();
  
  // Update the count down every 1 second
  var countdownfunction = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo2").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
      clearInterval(countdownfunction);
      document.getElementById("demo").innerHTML = "EXPIRED";
    }
  }, 1000);
}
function Datefortravel3(){

  // Set the date we're counting down to
  var countDownDate = new Date("Jan 30, 2021 00:00:00").getTime();
  
  // Update the count down every 1 second
  var countdownfunction = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo3").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
      clearInterval(countdownfunction);
      document.getElementById("demo").innerHTML = "EXPIRED";
    }
  }, 1000);
}
function Datefortravel4(){

  // Set the date we're counting down to
  var countDownDate = new Date("Jan 9, 2021 00:00:00").getTime();
  
  // Update the count down every 1 second
  var countdownfunction = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo4").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
      clearInterval(countdownfunction);
      document.getElementById("demo").innerHTML = "EXPIRED";
    }
  }, 1000);
}