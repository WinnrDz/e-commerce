import "./bootstrap";
import.meta.glob(["../fonts/**"]);
import { setupSelectableButtons } from './app.js';

/*

Selectable Buttons

example of vars

const detailBtnsCont = document.getElementById("detailBtnsCont");
const detailBtnsArray = Array.from(detailBtnsCont.children);

const sizeBtnsCont = document.getElementById("sizeBtnsCont");
const sizeBtnsArray = Array.from(sizeBtnsCont.children);

example of calling the function

    setupSelectableButtons(detailBtnsArray, {
        active: ["font-satoshim"],
        inactive: ["opacity-60","border-black/10"],
        rippleColor: "rgba(0, 0, 0, 0.08)",
        ripple: true
    });

    setupSelectableButtons(sizeBtnsArray, {
        active: ["text-white","bg-black"],
        inactive: ["text-black/60","hover:bg-[#EAEAEA]"],
        rippleColor : "rgba(255, 255, 255, 0.3)",
        ripple: true
    });
    */


/*---------------------------------------------------------------------------------------------------------------------------------------*/

const previewCont = document.getElementById("previewCont");


const previewArray = Array.from(previewCont.children);
const previewImage = document.getElementById("previewImage");

window.preview = function (num) {
    for (let i = 0; i < 3; i++) {
        previewArray[i].classList.remove("border", "black");
    }
    previewArray[num].classList.add("border", "black");

    previewImage.src = previewArray[num].firstElementChild.src;
    zoomedImage.src = previewArray[num].firstElementChild.src;
};

/*---------------------------------------------------------------------------------------------------------------------------------------*/

const zoomable = document.getElementById("zoomable");
const square = document.getElementById("square");
const zoomed = document.getElementById("zoomed");
const buyContent = document.getElementById("buyContent");
const zoomedImage = document.getElementById("zoomedImage");

zoomable.addEventListener("mousemove", (e) => {
    square.classList.remove("hidden");
    square.classList.add("block");

    zoomed.classList.add("block");
    zoomed.classList.remove("hidden");

    buyContent.classList.add("hidden");

    const rect = zoomable.getBoundingClientRect();

    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    const left = Math.max(0, Math.min(210, x - 120));
    const top = Math.max(0, Math.min(280, y - 140));

    square.style.left = `${left}px`;
    square.style.top = `${top}px`;

    let invLeft = -(left - 210);
    let infTop = -(top - 280);

    zoomedImage.style.left = `${invLeft}px`;
    zoomedImage.style.top = `${infTop}px`;

    console.log(left, top);
});

zoomable.addEventListener("mouseleave", () => {
    square.classList.remove("block");
    square.classList.add("hidden");

    zoomed.classList.add("hidden");
    zoomed.classList.remove("block");

    buyContent.classList.add("block");
    buyContent.classList.remove("hidden");
});

/*---------------------------------------------------------------------------------------------------------------------------------------*/

const detailBtnsCont = document.getElementById("detailBtnsCont");
const detailBtnsArray = Array.from(detailBtnsCont.children);

const sizeBtnsCont = document.getElementById("sizeBtnsCont");
const sizeBtnsArray = Array.from(sizeBtnsCont.children);





    setupSelectableButtons(detailBtnsArray, {
        active: ["font-satoshim"],
        inactive: ["opacity-60","border-black/10"],
        rippleColor: "rgba(0, 0, 0, 0.08)",
        
    });

    setupSelectableButtons(sizeBtnsArray, {
        active: ["text-white","bg-black"],
        inactive: ["text-black/60","hover:bg-[#EAEAEA]"],
        rippleColor : "rgba(255, 255, 255, 0.3)",
        ripple: false
    });
    


/*------------------------------------------------------------------------------------------------------------------------------------------------*/
