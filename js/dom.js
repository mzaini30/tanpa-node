function $$(x){
	return document.querySelectorAll(x)
}
function text(elemen, value){
	$$(elemen).forEach(x => x.innerText = value)
}
function html(elemen, value){
	$$(elemen).forEach(x => x.innerHTML = value)
}
function attribute(elemen, attribute, value){
	$$(elemen).forEach(x => x.setAttribute(attribute, value))
}
export {text, html, attribute}