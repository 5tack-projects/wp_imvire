// alert("Onscroll JS loaded!");

function appearDivs() {
    var grid = document.getElementsByClassName("summon");
    var grids =  grid.length;
  
    var delayPrefix = "0";
    for(var i=0 ; i<grids; i++){
  
      if (isInViewport(grid[i])) {
  
        var animation = grid[i].getAttribute('data-animation');
        amount = i / 10;
        delay = amount + "s";
        grid[i].classList.add(animation);
        grid[i].style.animationDelay = delay;
  
      } else { // not in viewport - no action
        var animation = grid[i].getAttribute('data-animation');
        // grid[i].classList.remove(animation);
      } // viewport check
  
    } // End iterating
  } //appearDivs