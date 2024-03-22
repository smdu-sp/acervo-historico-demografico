if (document.images)	{
	
	menu_01_off = new Image
	menu_01_on = new Image
	menu_01_off.src = 'img/menu_01_off.gif'
	menu_01_on.src = 'img/menu_01_on.gif'
	
	menudir_01_off = new Image
	menudir_01_on = new Image
	menudir_01_off.src = 'img/menudir_01_off.gif'
	menudir_01_on.src = 'img/menudir_01_on.gif'
	
}

else {
	menu_01_off = ""
	menu_01_off = ""
	document.menu01 = ""
	
	menudir_01_off = ""
	menudir_01_off = ""
	document.menudir01 = ""
	
}

//////////////show and hide routine////////////////////////
var timer = 0;
var currmenu ="";

function show(currElem) {
	hide();
	// do IE4 and IE5
	if ((document.all && !document.getElementById) || (document.all && document.getElementById)) {
		menuObj = eval("document.all." + currElem + ".style")
		//menuObj.pixelTop = 114; // 194 if top ad in place, 94 if not
		// menuObj.visibility = "visible";
		menuObj.display = "block";
	}
	
	else {
		// do NS6
		if (document.getElementById && !document.all) {
		menuObj = eval("document.getElementById(\"" + currElem + "\").style");
		//menuObj.top = 114; // 194 if top ad in place, 94 if not
		// menuObj.visibility = "visible";
		menuObj.display = "block";
		}
		// do NS4
		else{
		menuObj = eval("document." + currElem)
		//menuObj.top = 114; // 194 if top ad in place, 94 if not
		}
	}
}

function hide() {
	if (timer!=0 && currmenu!=""){
		// do IE4 and IE5
		if ((document.all && !document.getElementById) || (document.all && document.getElementById)) {
			menuObj = eval("document.all." + currmenu + ".style")
			//menuObj.pixelTop = -390;
			// menuObj.visibility = "hidden";
			menuObj.display = "none";
		}
		
		else {
			// do NS6
			if (document.getElementById && !document.all) {
			menuObj = eval("document.getElementById(\"" + currmenu + "\").style");
			//menuObj.top = -390;
			// menuObj.visibility = "hidden";
			menuObj.display = "none";
			}
			// do NS4
			else{
			menuObj = eval("document." + currmenu)
			//menuObj.top = -390;
			}
		}
	}
}

function wait(currElem) {
	currmenu = currElem;
	timer = setTimeout('hide()',300);
}

function clearTimer() {
	clearTimeout(timer);
	timer=0;
}