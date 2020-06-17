var state = false;

function openNav(){
	state = !state;
  if(state == true){
    mySidenav.style.width = "230px";
    main.style.marginLeft = "230px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
  } else {
  	 mySidenav.style.width = "0";
  	 main.style.marginLeft = "0";
    document.body.style.backgroundColor = "#fff";
  }
}