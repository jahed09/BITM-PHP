// /////////////////////////DOM//////////////////////////////


var button = document.getElementById('button')

button.onclick = function () {
    var headingElement = document.createElement('h1');
    var paragraphElement = document.createElement('p');
    headingElement.innerHTML="this is a heading practise for today";
    paragraphElement.innerHTML="this is a paragraph practise for today";
    document.getElementById('div1').appendChild(headingElement);
    document.getElementById('div1').appendChild(paragraphElement);

}









var submit = document.getElementById('submit');
submit.onclick = function () {
    var heightValue = document.getElementById('height').value;
    var widthValue = document.getElementById('width').value;
    var bgColorValue = document.getElementById('bgcolor').value;

        var myDiv = document.getElementById('mydiv');
        myDiv.style.height = heightValue+'px';
        myDiv.style.width = widthValue+'px';
        myDiv.style.backgroundColor = bgColorValue;
        }