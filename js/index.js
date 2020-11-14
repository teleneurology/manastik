

var submit = document.getElementById("submit");

submit.onClick = function () {
    var name = document.getElementById("name").value;

    var phone = document.getElementById("phone").value;

    document.getElementById("outputName") = name;
    document.getElementById("outputPhone") = phone;
}