let courses = document.getElementById('courses');
let courses_menu = document.getElementById('courses_menu');
let i1 = document.getElementById('i1');
let i2 = document.getElementById('i2');
let left = document.querySelector('.left');

let i = 0;


courses.addEventListener("mouseover", function () {
    if (i == 0) {
        i += 1;
        courses.style.color = "#ff2b01";
        courses_menu.style.display = "block";
    } else if (i == 1) {
        i -= 1;
        courses.style.color = "black";
        courses_menu.style.display = "none";
    }
})

let course2 = document.getElementById("dropbtn");
c = 0;

course2.addEventListener("click", function () {
    let dropdown_content = document.querySelector(".dropdown-content");
    if (c == 1) {
        c = 0;
        console.log(c);
        dropdown_content.style.display = "none";
    } else {
        c = 1;
        console.log(c);
        dropdown_content.style.display = "block";
    }
})

i1.addEventListener("click", function () {
    left.style.left = "0";
    i2.style.display = "inline-block";
    i1.style.display = "none";
});
i2.addEventListener("click", function () {
    left.style.left = "-800px";
    i1.style.display = "inline-block";
    i2.style.display = "none";
})