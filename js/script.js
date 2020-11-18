// JavaScript Document

// этот код работает с формой
var nameField = document.getElementById("name");

nameField.onfocus = function() {
	if ( nameField.value == "your name") {
		nameField.value = "";
	}
};

nameField.onblur = function() {
	if ( nameField.value == "") {
		nameField.value = "your name";
	}
};


// Этот код захватывает картинку по id, и перебирает массив, подставляя значения в src
let myImage = document.getElementById("mainImage");

let imageArray = ["images/golden_gate.jpg","images/old_copcar.jpg","images/red_rock_01.jpg",
                 "images/tahoe_01.jpg","images/ventura_01.jpg","images/beach_houses.jpg"];
let imageIndex = 0;

function changeImage() {
	myImage.setAttribute("src",imageArray[imageIndex]);
	imageIndex++;
	if (imageIndex >= imageArray.length) {
		imageIndex = 0;
	}
}

// этот код останавливает перебор картинок по клику на id тега img 
let intervalHandle = setInterval(changeImage,5000);

myImage.onclick =  function() {
	clearInterval(intervalHandle);
};







