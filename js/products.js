
// category
function mysheet() {
    mytype();
    $("#myInout0 .mybtn,#myInout1 .mybtn1,#myInout2 .mybtn2,#myInout3 .mybtn3").removeClass("active");
    $("#myInout0 .mybtn").eq(0).addClass("active");
    $("#myInout1 .mybtn1").eq(0).addClass("active");
    $("#myInout2 .mybtn2").eq(0).addClass("active");
    $("#myInout3 .mybtn3").eq(0).addClass("active");
}
function mymesa() {
    notsheep();
    $("#myInout0 .mybtn,#myInout1 .mybtn1,#myInout2 .mybtn2,#myInout3 .mybtn3").removeClass("active");
    $("#myInout0 .mybtn").eq(1).addClass("active");
    $("#myInout1 .mybtn1").eq(0).addClass("active");
    $("#myInout2 .mybtn2").eq(0).addClass("active");
    $("#myInout3 .mybtn3").eq(0).addClass("active");
}
function mytile() {
    notsheep();
    $("#myInout0 .mybtn,#myInout1 .mybtn1,#myInout2 .mybtn2,#myInout3 .mybtn3").removeClass("active");
    $("#myInout0 .mybtn").eq(2).addClass("active");
    $("#myInout1 .mybtn1").eq(0).addClass("active");
    $("#myInout2 .mybtn2").eq(0).addClass("active");
    $("#myInout3 .mybtn3").eq(0).addClass("active");
}
function mystone() {
    notsheep();
    $("#myInout0 .mybtn,#myInout1 .mybtn1,#myInout2 .mybtn2,#myInout3 .mybtn3").removeClass("active");
    $("#myInout0 .mybtn").eq(3).addClass("active");
    $("#myInout1 .mybtn1").eq(0).addClass("active");
    $("#myInout2 .mybtn2").eq(0).addClass("active");
    $("#myInout3 .mybtn3").eq(0).addClass("active");
}
function mytrim() {
    iwall();
    $("#myInout0 .mybtn,#myInout1 .mybtn1,#myInout2 .mybtn2,#myInout3 .mybtn3").removeClass("active");
    $("#myInout0 .mybtn").eq(4).addClass("active");
    $("#myInout2 .mybtn2").eq(0).addClass("active");
    $("#myInout3 .mybtn3").eq(0).addClass("active");
}
// types
function monochrome() {
    mytype();
    $("#myInout1 .mybtn1").removeClass("active");
    $("#myInout0 .mybtn").eq(0).addClass("active");
    $("#myInout1 .mybtn1").eq(1).addClass("active");
    $("#myInout2 .mybtn2").removeClass("active");
    $("#myInout3 .mybtn3").eq(0).addClass("active");
}
function stonepattern() {
    mytype();
    $("#myInout1 .mybtn1").removeClass("active");
    $("#myInout0 .mybtn").eq(0).addClass("active");
    $("#myInout1 .mybtn1").eq(2).addClass("active");
    $("#myInout2 .mybtn2").removeClass("active");
    $("#myInout3 .mybtn3").eq(0).addClass("active");
}
function woodgrain() {
    mytype();
    $("#myInout1 .mybtn1").removeClass("active");
    $("#myInout0 .mybtn").eq(0).addClass("active");
    $("#myInout1 .mybtn1").eq(3).addClass("active");
    $("#myInout2 .mybtn2").removeClass("active");
    $("#myInout3 .mybtn3").eq(0).addClass("active");
}
function metallook() {
    mytype();
    $("#myInout1 .mybtn1").removeClass("active");
    $("#myInout0 .mybtn").eq(0).addClass("active");
    $("#myInout1 .mybtn1").eq(4).addClass("active");
    $("#myInout2 .mybtn2").removeClass("active");
    $("#myInout3 .mybtn3").eq(0).addClass("active");
}
function other() {
    mytype();
    $("#myInout1 .mybtn1").removeClass("active");
    $("#myInout0 .mybtn").eq(0).addClass("active");
    $("#myInout1 .mybtn1").eq(5).addClass("active");
    $("#myInout2 .mybtn2").removeClass("active");
    $("#myInout3 .mybtn3").eq(0).addClass("active");
}
// brands
function corner(){
    brand();
    $("#myInout2 .mybtn2").removeClass("active");
    $("#myInout0 .mybtn").eq(0).addClass("active");
    $("#myInout2 .mybtn2").eq(1).addClass("active");
    $("#myInout1 .mybtn1").removeClass("active");
    $("#myInout3 .mybtn2").eq(0).addClass("active");
}
function eternal(){
    brand();
    $("#myInout2 .mybtn2").removeClass("active");
    $("#myInout0 .mybtn").eq(0).addClass("active");
    $("#myInout2 .mybtn2").eq(2).addClass("active");
    $("#myInout1 .mybtn1").removeClass("active");
    $("#myInout3 .mybtn3").eq(0).addClass("active");
}
function holy(){
    brand();
    $("#myInout2 .mybtn2").removeClass("active");
    $("#myInout0 .mybtn").eq(0).addClass("active");
    $("#myInout2 .mybtn2").eq(3).addClass("active");
    $("#myInout1 .mybtn1").removeClass("active");
    $("#myInout3 .mybtn3").eq(0).addClass("active");
}

// filterSelection('all')
function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("mycard");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
        RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
    }
};

function AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) { element.className += " " + arr2[i]; }
    }
};

function RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
};
// 按鈕
$(function () {
    var Inout0 = document.getElementById("myInout0");
    var btns0 = Inout0.getElementsByClassName("btn mybtn ");
    for (var i = 0; i < btns0.length; i++) {
        btns0[i].addEventListener("click", function () {
            var current0 = document.getElementsByClassName("active", "mybtn active");
            current0[0].className = current0[0].className.replace("active");
            this.className += " active";
        });
    }
});
$(function () {
    var Inout1 = document.getElementById("myInout1");
    var btns1 = Inout1.getElementsByClassName("mybtn1 ");
    for (var i = 0; i < btns1.length; i++) {
        btns1[i].addEventListener("click", function () {
            var current1 = document.getElementsByClassName("active", "mybtn1 active");
            current1[1].className = current1[1].className.replace("active");
            this.className += " active";
        });
    }
});
$(function () {
    var Inout2 = document.getElementById("myInout2");
    var btns2 = Inout2.getElementsByClassName("mybtn2 ");
    for (var i = 0; i < btns2.length; i++) {
        btns2[i].addEventListener("click", function () {
            var current2 = document.getElementsByClassName("active", "mybtn2 active");
            current2[2].className = current2[2].className.replace("active");
            this.className += " active";
        });
    }
});

$(function () {
    var Inout3 = document.getElementById("myInout3");
    var btns3 = Inout3.getElementsByClassName("mybtn3 ");
    for (var i = 0; i < btns3.length; i++) {
        btns3[i].addEventListener("click", function () {
            var current3 = document.getElementsByClassName("active", "mybtn3 active");
            current3[3].className = current3[3].className.replace("active");
            this.className += " active";
        });
    }
});