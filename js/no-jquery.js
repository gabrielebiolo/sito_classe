
//#region time counter
  const timeForm = document.getElementById("time");
  const timeCounter = () => {
    const date = new Date();
    return `${date.getHours()}:${date.getMinutes()}:${date.getSeconds()}`;
  };
  timeForm.append(timeCounter());
//#endregion time counter

//#region mouse event
const mouse = document.querySelector(".cursor");  //qua viene preso il div 
const image = document.querySelector(".docente")
/*Quando è in document*/ 
document.addEventListener("mousemove", (e) => {   //mouse over l'intero document
  //console.log(e);
  mouse.setAttribute(
    "style",
    "top: " + (e.pageY - 10) + "px; left:" + (e.pageX - 10) + "px;" //prendo sempre la posizione del mouse, -10 se no non è centrato
  );
});
/*Quando è out document*/ 
document.addEventListener("mouseout", () => {   //se mouse out dal document  => z-index:-1,
  //console.log(e);
  mouse.setAttribute(
    "style",
    "z-index: -1" 
  );
});

/*Applico for each item con classe mouse-change*/ 
document.querySelectorAll('.mouse-change').forEach(item => {
  item.addEventListener('mouseover', () =>{
    mouse.classList.add('link-cursor');
  });

  item.addEventListener('mouseout', () =>{
    mouse.classList.remove('link-cursor');
  });
})

document.querySelectorAll('.cursor-image').forEach(item => {
  item.addEventListener('mouseover', () =>{
    // image.classList.add('on-image');
  })
  item.addEventListener('mouseout', () =>{
    // image.classList.remove('on-image');
  })
})
//#endregion 

//#region tooltip btn index

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
});
//#endregion

//#region section card docente
// document.querySelectorAll('.docente').forEach(item => {
//   item.addEventListener('mouseover', () =>{
//     const img = item.getElementsByTagName('img'); //prende l'img nella card
//     img[0].setAttribute('style','transition:1s'); //applico la transition all'image
//     item.classList.add('on-image'); //ON IMAGE rimpiciolisce la immagine > avatar
//     const card_body = item.childNodes[2].nextSibling; //seleziono solo il body della card 
//     card_body.setAttribute('style', 'visibility: hidden'); //nascondo il testo della card
//     const getPopUp = item.querySelectorAll('.card-text-hover'); //dentro la card tiro fuori tutte le classi con .card-text-hover
//     getPopUp[0].classList.add('text-card'); // a indice 0, non che ultimo vi è il testo a scomparsa
//   }) 
//   item.addEventListener('mouseout', () =>{  //stessa identica cosa di prima ma tolgo l classi
//     const img = item.getElementsByTagName('img'); 
//     img[0].setAttribute('style','transition:1s');
//     item.classList.remove('on-image');
//     const card_body = item.childNodes[2].nextSibling;
//     card_body.setAttribute('style', 'visibility: visible');
//     const getPopUp = item.querySelectorAll('.card-text-hover');
//     getPopUp[0].classList.remove('text-card');
//   })
// });
// //#endregion 