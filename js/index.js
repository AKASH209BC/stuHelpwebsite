 //INSPIRATION 
//------------> https://dribbble.com/shots/3331288-Daily-UI-002-Credit-Card-Checkout
// loading after resources and depenednet resources have been loaded
window.addEventListener("load", function () {
    // forms
    var inputs = document.querySelectorAll("input");
    var ccList = document.querySelectorAll(".ccList li");
    var name = document.querySelector(".name");
    var year = document.querySelector(".year");
    var inputCon = document.querySelectorAll(".inputCon");
    var btn = document.querySelector('button');
    //credit card
    var cName = document.querySelector(".name");
    var cList = document.querySelector(".creditCard ul li");
    var cYear = document.querySelector(".creditCard .year");
    var length = inputs.length;
    var regExp = [/^[A-Za-z\'\s\.\,]+$/, /^4[0-9]{12}(?:[0-9]{3})?$/, /^[0-9]{3,4}$/];
    //focusing the text->function
    var fieldColor = function fieldColor(i) {
        for (j = 0; j < inputCon.length; j++) {
            if (i == j) {
                inputCon[i].style.color = "rgb(64,146,181)";
            } else
            {
                inputCon[j].style.color = "rgb(193,193,193)";
            }
        }
    };
    var checkInput = function checkInput(i) {
        // Name
        if (i == 0) {
            if (inputs[0].value.match(regExp[0])) {
                cName.innerText = inputs[0].value;
                inputCon[0].style.color = "rgb(64,146,181)";
                inputs[0].style.borderBottomColor = "rgb(64,146,181)";
            } else
            if (inputs[0].value == "" || !inputs[0].value.match(regExp[0])) {
                cName.innerText = "";
                inputs[0].style.borderBottomColor = "red";
            }
        }

        //CCard NUmber
        if (i == 1) {
            if (inputs[1].value == "") {
                inputs[1].style.borderBottomColor = "red";
                cList.innerText = " ";
            } else
            {
                var cNumber = inputs[1].value;
                cNumber = cNumber.replace(/\s/g, "");
                if (Number(cNumber)) {
                    cNumber = cNumber.match(/.{1,4}/g);
                    cNumber = cNumber.join(" ");
                    inputs[1].value = cNumber;
                    if (cNumber.length <= 0) {
                        cList.innerText = "";
                    } else
                    if (cNumber.length > 19) {
                        cList.innerText = cNumber.substring(0, 20);
                        inputs[1].style.borderBottomColor = "red";

                    } else
                    {
                        cList.innerText = cNumber;
                        inputs[1].style.borderBottomColor = "rgb(64,146,181)";
                    }
                } else
                {
                    inputs[1].style.borderBottomColor = "red";
                }
            }
        }
        // card Date
        else if (i == 2) {
                var dateValue = inputs[2].value;
                var d = dateValue.replace(/\s/g, "");
                // making sure its a number 
                if (Number(dateValue)) {
                    d = dateValue.split("").map(function (i) {
                        return parseInt(i, 10);
                    });

                    var date = new Date();
                    var twoDigitYear = parseInt(date.getFullYear().toString().substr(2), 10);
                    //the first two digit in the month field
                    if (d.length == 2) {
                        //checking for first
                        if (d[0] == 0 && (d[1] !== 0 || d[1] <= 9) || d[0] == 1 && d[1] <= 2) {
                            inputs[2].style.borderBottomColor = "rgb(64,146,181)";
                            cYear.innerText = dateValue + "/";
                        } else
                        {
                            inputs[2].style.borderBottomColor = "red";

                        }
                    } //End of Month
                    else if (d.length == 4) {
                            var twoDigitYearN = parseInt(d[2].toString().concat(d[3].toString()), 10);
                            if (twoDigitYearN > twoDigitYear) {
                                var stringDigit = twoDigitYearN.toString();
                                cYear.innerText += stringDigit;
                                inputs[2].value = cYear.innerText;
                                inputs[2].style.borderBottomColor = "rgb(64,146,181)";
                            } else
                            {
                                inputs[2].style.borderBottomColor = "red";
                            }
                        } //End of date + full date
                } //END of IF for [i = 2]
                else {
                        cYear.innerText = "";
                        inputs[2].style.borderBottomColor = "red";
                    }
            }

        if (i == 3) {
            var cV = inputs[i].value;
            if (Number(cV) && cV.match(regExp[2])) {
                inputs[i].style.borderBottomColor = "rgb(64,146,181)";
            } else
            {
                inputs[3].style.borderBottomColor = "red";
            }
        }
    };
    //setting value initially in the card to that of placeholder
    cName.innerText = inputs[0].getAttribute('placeholder');
    cList.innerText = inputs[1].getAttribute('placeholder');
    cYear.innerText = inputs[2].getAttribute('placeholder'); //Adding Event Listeners
    for (i = 0; i < inputCon.length; i++) {
        inputs[i].addEventListener('click', fieldColor.bind(undefined, i));
        inputs[i].addEventListener('input', checkInput.bind(undefined, i));
    }
    btn.addEventListener('click', function (e) {
        e.preventDefault();
        for (i = 0; i < length; i++) {
            if (inputs[i].value == "") {
                inputs[i].style.borderBottomColor = "red";
            }
        }
        if (cList.innerText.length < 16) {
            inputs[1].style.borderBottomColor = "red";
        }
    });
});