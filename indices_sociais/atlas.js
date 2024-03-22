
/*
Simple Image Trail script- By JavaScriptKit.com
Visit http://www.javascriptkit.com for this script and more
This notice must stay intact
*/

var offsetfrommouse=[15,5]; //image x,y offsets from cursor position in pixels. Enter 0,0 for no offset
var displayduration=0; //duration in seconds image should remain visible. 0 for always.
var currentimageheight = 400;	// maximum image size.

var currentimagewidth = 490;	// maximum image size.
var timer;

function gettrailobj(){
if (document.getElementById)
return document.getElementById("preview_div").style
else if (document.all)
return document.all.trailimagid.style
}

function gettrailobjnostyle(){
if (document.getElementById)
return document.getElementById("preview_div")
else if (document.all)
return document.all.trailimagid
}


function truebody(){
return (!window.opera && document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}


function hidetrail(){	
	gettrailobj().display= "none";
	document.onmousemove=""
	gettrailobj().left="500px"
	clearTimeout(timer);
}

function showtrail(imagename,title,showthumb){
	i = imagename;
	t = title;
	s = showthumb;
	timer = setTimeout("show_t('"+i+"',t,s);",200);
}
function show_t(imagename,title,showthumb){
        var docwidth=document.all? truebody().scrollLeft+truebody().clientWidth : pageXOffset+window.innerWidth - offsetfrommouse[0]
	var docheight=document.all? Math.min(truebody().scrollHeight, truebody().clientHeight) : Math.min(window.innerHeight)

if((navigator.userAgent.indexOf("Firefox")!=-1 || (navigator.userAgent.indexOf("Opera")==-1 && navigator.appVersion.indexOf("MSIE")!=-1)) && (docwidth>650 && docheight>300)){

	document.onmousemove=followmouse; 
	
	newHTML = '<div class="border_preview"><div id="loader_container"><div id="loader"><div align="center">Lendo arquivo...</div><div id="loader_bg"><div id="progress"> </div></div></div></div>';
	newHTML = newHTML + '<h2 class="title_h2">' + title + '</h2>'
	if (showthumb > 0){
    newHTML = newHTML + '<div align="center" style="padding: 8px 10px 17px 10px;"><img onload="javascript:remove_loading();" src="' + imagename + '" border="0"></div>';
}

	newHTML = newHTML + '</div>';
	if(navigator.userAgent.indexOf("Firefox")==-1){	newHTML = newHTML+'<iframe src="about:blank" scrolling="no" frameborder="0" width="390" height="390"></iframe>';}

	gettrailobjnostyle().innerHTML = newHTML;

	gettrailobj().display="block";

}

function followmouse(e){

	var xcoord=offsetfrommouse[0]
	var ycoord=offsetfrommouse[1]

	var docwidth=document.all? truebody().scrollLeft+truebody().clientWidth : pageXOffset+window.innerWidth - offsetfrommouse[0]
	var docheight=document.all? Math.min(truebody().scrollHeight, truebody().clientHeight) : Math.min(window.innerHeight)

	if (typeof e != "undefined"){
		if (docwidth - e.pageX < currentimagewidth){

		if(navigator.userAgent.indexOf("Firefox")!=-1)	{xcoord = e.pageX - xcoord - currentimagewidth + 2*offsetfrommouse[0]} else{ xcoord = e.pageX - xcoord - currentimagewidth + 6*offsetfrommouse[0] ;} // Move to the left side of the cursor
		} else {
			xcoord += e.pageX;
		}
		if (docheight - e.pageY < (currentimageheight + 110)){
			ycoord += e.pageY - Math.max(0,(110 + currentimageheight + e.pageY - docheight - truebody().scrollTop));
		} else {
			ycoord += e.pageY;
		}

	} else if (typeof window.event != "undefined"){
		if (docwidth - event.clientX < currentimagewidth){
			xcoord = event.clientX + truebody().scrollLeft - xcoord - currentimagewidth + 2*offsetfrommouse[0]; // Move to the left side of the cursor
		} else {
			xcoord += truebody().scrollLeft+event.clientX
		}
		if (docheight - event.clientY < (currentimageheight + 110)){
			ycoord += event.clientY + truebody().scrollTop - Math.max(0,(110 + currentimageheight + event.clientY - docheight));
		} else {
			ycoord += truebody().scrollTop + event.clientY;
		}
	}

	var docwidth=document.all? truebody().scrollLeft+truebody().clientWidth : pageXOffset+window.innerWidth-offsetfrommouse[0]
	var docheight=document.all? Math.max(truebody().scrollHeight, truebody().clientHeight) : Math.max(document.body.offsetHeight, window.innerHeight)
		if(ycoord < 0) { ycoord = ycoord*-1; }
	gettrailobj().left=xcoord+"px"
	gettrailobj().top=ycoord+"px"
}
}



var t_id = setInterval(animate,20);
var pos=0;
var dir=2;
var len=0;

function animate()
{
var elem = document.getElementById('progress');
if(elem != null) {
if (pos==0) len += dir;
if (len>32 || pos>79) pos += dir;
if (pos>79) len -= dir;
if (pos>79 && len==0) pos=0;
elem.style.left = pos;
elem.style.width = len;
}
}

function remove_loading() {
this.clearInterval(t_id);
var targelem = document.getElementById('loader_container');
targelem.style.display='none';
targelem.style.visibility='hidden';
var t_id = setInterval(animate,60);
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

////////////////////////////////////////////////////////////////

if (document.images)	{
	
	menu_01_off = new Image
	menu_01_on = new Image
	menu_01_off.src = 'img/menu_01_off.gif'
	menu_01_on.src = 'img/menu_01_on.gif'

	menu_02_off = new Image
	menu_02_on = new Image
	menu_02_off.src = 'img/menu_02_off.gif'
	menu_02_on.src = 'img/menu_02_on.gif'
	
	menu_03_off = new Image
	menu_03_on = new Image
	menu_03_off.src = 'img/menu_03_off.gif'
	menu_03_on.src = 'img/menu_03_on.gif'
	
	menu_04_off = new Image
	menu_04_on = new Image
	menu_04_off.src = 'img/menu_04_off.gif'
	menu_04_on.src = 'img/menu_04_on.gif'
}

else {
	menu_01_off = ""
	menu_01_off = ""
	document.menu01 = ""

	menu_02_off = ""
	menu_02_off = ""
	document.menu02 = ""

	menu_03_off = ""
	menu_03_off = ""
	document.menu03 = ""

	menu_04_off = ""
	menu_04_off = ""
	document.menu04 = ""

}

