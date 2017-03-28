// JavaScript Document


//---------------开始修复Firefox中event.fromElement和event.toElement----------------
if (window.addEventListener) {
    FixPrototypeForGecko();
}
function FixPrototypeForGecko() {
    HTMLElement.prototype.__defineGetter__("runtimeStyle", element_prototype_get_runtimeStyle);
    window.constructor.prototype.__defineGetter__("event", window_prototype_get_event);
    Event.prototype.__defineGetter__("srcElement", event_prototype_get_srcElement);
    Event.prototype.__defineGetter__("fromElement", element_prototype_get_fromElement);
    Event.prototype.__defineGetter__("toElement", element_prototype_get_toElement);
}
function element_prototype_get_runtimeStyle() {
    return this.style;
}
function window_prototype_get_event() {
    return SearchEvent();
}
function event_prototype_get_srcElement() {
    return this.target;
}
function element_prototype_get_fromElement() {
    var node;
    if (this.type == "mouseover") node = this.relatedTarget;
    else if (this.type == "mouseout") node = this.target;
    if (!node) return;
    while (node.nodeType != 1) node = node.parentNode;
    return node;
}
function element_prototype_get_toElement() {
    var node;
    if (this.type == "mouseout") node = this.relatedTarget;
    else if (this.type == "mouseover") node = this.target;
    if (!node) return;
    while (node.nodeType != 1) node = node.parentNode;
    return node;
}
function SearchEvent() {
    if (document.all) return window.event;
    func = SearchEvent.caller;
    while (func != null) {
        var arg0 = func.arguments[0];
        if (arg0 instanceof Event) {
            return arg0;
        }
        func = func.caller;
    }
    return null;
}
//---------------结束修复Firefox中event.fromElement和event.toElement----------------

//等比缩放图片===============================================================
function AutoResizeImage(maxWidth,maxHeight,objImg){
	var img = new Image();
	img.src = objImg.src;
	var hRatio;
	var wRatio;
	var Ratio = 1;
	var w = img.width;
	var h = img.height;
	wRatio = maxWidth / w;
	hRatio = maxHeight / h;
	if (maxWidth ==0 && maxHeight==0){
	Ratio = 1;
	}else if (maxWidth==0){//
	if (hRatio<1) Ratio = hRatio;
	}else if (maxHeight==0){
	if (wRatio<1) Ratio = wRatio;
	}else if (wRatio<1 || hRatio<1){
	Ratio = (wRatio<=hRatio?wRatio:hRatio);
	}
	if (Ratio<1){
	w = w * Ratio;
	h = h * Ratio;
	}
	objImg.height = h;
	objImg.width = w;
}
//=========================================================================

