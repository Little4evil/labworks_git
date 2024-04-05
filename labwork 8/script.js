function checkEven() {
    var number = document.getElementById('numberInput').value;
    if (number % 2 == 0) {
        console.log("Число " + number + " является четным.");
    } else {
        console.log("Число " + number + " является нечетным.");
    }
}

var numberArray = [];
for (var i = 1; i <= 5; i++) {
    numberArray.push(i);
}

var numberList = document.createElement('ul');

for (var i = 0; i < numberArray.length; i++) {
    var listItem = document.createElement('li');
    listItem.textContent = numberArray[i];
    numberList.appendChild(listItem);
}

document.body.appendChild(numberList);