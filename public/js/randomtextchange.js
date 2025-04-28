function Counter(elem, delay) {
    var value = parseInt(elem.getAttribute("value"), 10);
    var interval;
  
    var titles = [
      "For Every Engineer",
      "For Every Faculty ",
      "For Every Admin",
      "For Every Student",
    ];
  
    function updateDisplay(value) {
      elem.innerHTML = value;
    }
  
    function run() {
      value += 1;
      if (value == titles.length) value = 0;
  
      elem.setAttribute("value", value);
      updateDisplay(titles[value]);
    }
  
    function start() {
      interval = window.setInterval(run, delay);
    }
  
    // exports
    // This actually creates a function that our counter can call
    // you'll see it used below.
    //
    // The other functions above cannot be accessed from outside
    // this function.
    this.start = start;
  }
  
  var elem = document.getElementById("text-switcher");
  
  counter = new Counter(elem, 3000);
  counter.start();