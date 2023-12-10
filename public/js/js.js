const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry);
        if(entry.isIntersecting){
            entry.target.classList.add('show');
        } //else{
        //     entry.target.classList.remove('show');
        // }
    }) 
});

const hiddenElements1 = document.querySelectorAll('.hidden1');
hiddenElements1.forEach((el) => observer.observe(el));

const hiddenElements2 = document.querySelectorAll('.hidden2');
hiddenElements2.forEach((el) => observer.observe(el));

const hiddenElements3 = document.querySelectorAll('.hidden3');
hiddenElements3.forEach((el) => observer.observe(el));

let nums = document.querySelectorAll("#number");
let section = document.querySelector(".section");

let started = false;

window.onscroll = function () {
    if(window.scrollY >= section.offsetTop){
        if(!started){
            nums.forEach((num) => startCount(num));
        }
        started = true;
    }
};


function startCount(el){
    let goal = el.dataset.goal;
    let count = setInterval(() => {
        el.textContent ++;
        if(el.textContent == goal){
            clearInterval(count);
          }
    }, 20);
}

let courses = document.getElementById('courses');
      let courses_menu = document.getElementById('courses_menu');
      let i = 0;
      courses.addEventListener("mouseover", function(){
          
              courses.style.color="#ff2b01";
              courses_menu.style.display="block";
          
      })  
      courses_menu.addEventListener("mouseover", function(){
          
              courses.style.color="#ff2b01";
              courses_menu.style.display="block";
        })
      courses_menu.addEventListener("mouseout", function(){
          
        courses.style.color="black";
        courses_menu.style.display="none";
      
      })

     let course2 = document.getElementById("dropbtn");
      c = 0;

      course2.addEventListener("click", function(){
          let dropdown_content = document.querySelector(".dropdown-content");
          if(c == 1){
              c = 0;
              console.log(c);
              dropdown_content.style.display = "none";
          } else{
              c = 1;
              console.log(c);
              dropdown_content.style.display = "block";
          }
      })
