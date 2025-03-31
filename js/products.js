function removeactive(){
    $("#myInout0>.mybtn,#myInout1>.mybtn1,#myInout2>.mybtn2,#myInout3>.mybtn3,#myInout4>.mybtn4,#myInout5>.mybtn5").removeClass("active");
}
function isnotseet(){
    $("#myInout2 .mybtn2").eq(0).addClass("active");
    $("#myInout3 .mybtn3").eq(0).addClass("active");
    $("#myInout4 .mybtn4").eq(0).addClass("active");
    $("#myInout5 .mybtn5").eq(0).addClass("active");
}
function mysheet1() {
    removeactive();
    isnotseet();
    $("#myInout0 .mybtn").eq(0).addClass("active");
}
// category
function mysheet() {
    undo();
    // removeactive();
    mysheet1();
}
function mymesa() {
    notsheep();
    removeactive();
    $("#myInout0 .mybtn").eq(1).addClass("active");
    isnotseet();
}
function mytile() {
    notsheep();
    removeactive();
    $("#myInout0 .mybtn").eq(2).addClass("active");
    isnotseet();
}
// function mystone() {
//     notsheep();
//     removeactive();
//     $("#myInout0 .mybtn").eq(3).addClass("active");
//     isnotseet();
// }
function mytrim() {
    iwall();
    removeactive();
    $("#myInout0 .mybtn").eq(3).addClass("active");  //因石材被隱藏 順序提前.eq(4)
    isnotseet();
}
// types
function issheet(){
    $("#myInout0 .mybtn").eq(0).addClass("active");  // !important
    $("#myInout3 .mybtn3").eq(0).addClass("active");
}
function monochrome() {
    mytype1();
    removeactive();
    issheet();
    $("#myInout5 .mybtn5").eq(1).addClass("active");
}
function marble() {
    mytype1();
    removeactive();
    issheet();
    $("#myInout5 .mybtn5").eq(2).addClass("active");
}
function slate() {
    mytype1();
    removeactive();
    issheet();
    $("#myInout5 .mybtn5").eq(3).addClass("active");
}
function jade(){
    mytype1();
    removeactive();
    issheet();
    $("#myInout5 .mybtn5").eq(4).addClass("active");
}
// function terrazzo() {
//     mytype1();
//     removeactive();
//     issheet();
//     $("#myInout5 .mybtn5").eq(5).addClass("active");
// }

function woodgrain() {
    mytype1();
    removeactive();
    issheet();
    $("#myInout5 .mybtn5").eq(5).addClass("active");
}
function metallook() {
    mytype1();
    removeactive();
    issheet();
    $("#myInout5 .mybtn5").eq(6).addClass("active");
}
function other() {
    mytype1();
    removeactive();
    issheet();
    $("#myInout5 .mybtn5").eq(7).addClass("active");
}
// brands
function corner(){
    brand();
    removeactive();
    issheet();
    $("#myInout4 .mybtn4").eq(1).addClass("active");
}
function eternal(){
    brand();
    removeactive();
    issheet();
    $("#myInout4 .mybtn4").eq(2).addClass("active");
}
function holy(){
    brand();
    removeactive();
    issheet();
    $("#myInout4 .mybtn4").eq(3).addClass("active");
}
// color
function white(){
    mycolor();
    removeactive();
    issheet();
    $("#myInout2 .mybtn2").eq(1).addClass("active");
}
function grey(){
    mycolor();
    removeactive();
    issheet();
    $("#myInout2 .mybtn2").eq(2).addClass("active");
}
function black(){
    mycolor();
    removeactive();
    issheet();
    $("#myInout2 .mybtn2").eq(3).addClass("active");
}
function brown(){
    mycolor();
    removeactive();
    issheet();
    $("#myInout2 .mybtn2").eq(4).addClass("active");
}
function blue(){
    mycolor();
    removeactive();
    issheet();
    $("#myInout2 .mybtn2").eq(5).addClass("active");
}
function green(){
    mycolor();
    removeactive();
    issheet();
    $("#myInout2 .mybtn2").eq(6).addClass("active");
}
function beige(){
    mycolor();
    removeactive();
    issheet();
    $("#myInout2 .mybtn2").eq(7).addClass("active");
}

function colourful(){
    mycolor();
    removeactive();
    issheet();
    $("#myInout2 .mybtn2").eq(8).addClass("active");
}

// function all(){
//     $("#myInout1 .btn,#myInout2 .btn,#myInout3 .btn,#myInout4 .btn,#myInout5 .btn").removeClass("active");
// }

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
    var mytop = document.getElementById("myInout0");
    var Inout2 = document.getElementById("myInout2");
    var btns2 = Inout2.getElementsByClassName("mybtn2 ");
    for (var i = 0; i < btns2.length; i++) {
        btns2[i].addEventListener("click", function () {
            var current2 = document.getElementsByClassName("active", "mybtn2 active");
            current2[2].className = current2[2].className.replace("active");
            this.className += " active";
            mytop.className += " active";
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
$(function () {
    var mytop = document.getElementById("myInout0");
    var Inout4 = document.getElementById("myInout4");
    var btns4 = Inout4.getElementsByClassName("mybtn4 ");
    for (var i = 0; i < btns4.length; i++) {
        btns4[i].addEventListener("click", function () {
            var current4 = document.getElementsByClassName("active", "mybtn4 active");
            current4[4].className = current4[4].className.replace("active");
            this.className += " active";
            mytop.className += " active";
        });
    }
});
$(function () {
    var mytop = document.getElementById("myInout0");
    var Inout5 = document.getElementById("myInout5");
    var btns5 = Inout5.getElementsByClassName("mybtn5 ");
    for (var i = 0; i < btns5.length; i++) {
        btns5[i].addEventListener("click", function () {
            var current5 = document.getElementsByClassName("active", "mybtn5 active");
            current5[5].className = current5[5].className.replace("active");
            this.className += " active";
            mytop.className += " active";
        });
    }
});