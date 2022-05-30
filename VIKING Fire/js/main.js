const burger = document.querySelector('.toggel-btn');
const nav = document.querySelector('.justify');

        console.log(burger)
        burger.addEventListener('click', () => {
          nav.classList.toggle('show');
          if (nav.matches('.show')) {
            nav.classList.remove("end")
             nav.style.setProperty("display", "flex", "important");
          }
          else {
             nav.classList.add("end")
             setTimeout(() => {
              nav.style
              .setProperty("display", "none", "important");
             }, 1000);
          }
        });

        const navLinks = document.querySelectorAll(".justify a");
        const logo = document.querySelector(".logo");
        navLinks.forEach(n => {
          n.addEventListener("click", () => {
            nav.classList.toggle("show");
              if (nav.classList.toggle("show")) {
              nav.classList.toggle("show");
              nav.style.setProperty("display", "none", "important");
            }
          })
        });
          logo.addEventListener("click", () => {
            nav.classList.toggle("show");
              if (nav.classList.toggle("show")) {
              nav.classList.toggle("show");
              nav.style.setProperty("display", "none", "important");
            }
          });

          
const hidedText = document.querySelector('.hide-for-see-more-Track-Trace');
const seeMore = document.querySelector('.see-more');

if(seeMore != null) {
  seeMore.addEventListener('click', () => {
    hidedText.classList.toggle('show-text')
  });
};

const hidedTextAcademy = document.querySelector('.hide-for-see-Academy');
const seeMoreAcademy = document.querySelector('.see-more-Academy');

if(seeMoreAcademy != null) {
    seeMoreAcademy.addEventListener('click', () => {
        hidedTextAcademy.classList.toggle('show-text')
    });
  };


  const hidedTextPartX = document.querySelector('.hide-for-see-PartX');
  const seeMorePartX = document.querySelector('.see-more-partX');

  if(seeMorePartX != null) {
    seeMorePartX.addEventListener('click', () => {
        hidedTextPartX.classList.toggle('show-text')
    });
  };


  const hidedTextPerformer = document.querySelector('.hide-for-see-Performer');
  const seeMorePerformer= document.querySelector('.see-more-Performer');

  if(seeMorePerformer != null) {
    seeMorePerformer.addEventListener('click', () => {
        hidedTextPerformer.classList.toggle('show-text')
    });
  };

  const hidedTextTech = document.querySelector('.hide-for-see-tech');
  const seeMoreTech= document.querySelector('.see-more-tech');

  if(seeMoreTech != null) {
    seeMoreTech.addEventListener('click', () => {
        hidedTextTech.classList.toggle('show-text')
    });
  };