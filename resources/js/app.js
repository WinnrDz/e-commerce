import "./bootstrap";
import.meta.glob(["../fonts/**"]);

import { createIcons, icons } from 'lucide';

createIcons({
    icons
});

if (document.getElementById("welcome")) {
    import("./welcome.js");
}

if (document.getElementById("show")) {
    import("./show.js");
}

if (document.getElementById("shop")) {
    import("./shop.js");
}

/*---------------------------------------------------------------------------------------------------------------------------------------*/

export const setupSelectableButtons = function (btns, styles) {
    
    const ripple = styles.ripple ?? true; //default
    
    for (let activeNum = 0; activeNum < btns.length; activeNum++) {
        
        btns[activeNum].addEventListener("click", (e) => {
            /*style selected buttons (the ... spreads the array of strings)*/

            for (let i = 0; i < btns.length; i++) {
                btns[i].classList.remove(...styles.active);
                btns[i].classList.add(...styles.inactive);
            }
            btns[activeNum].classList.remove(...styles.inactive);
            btns[activeNum].classList.add(...styles.active);

            

            if (!ripple) return;

            /*ripple*/

            /*create the circle*/
            const circle = document.createElement("div");
            circle.classList.add("absolute");

            const size = 10;

            circle.style.width = `${size}px`;
            circle.style.height = `${size}px`;

            circle.style.borderRadius = "50%";
            circle.style.backgroundColor = styles.rippleColor;
            circle.style.pointerEvents = "none";
            circle.style.opacity = "0.6";

            const x = e.offsetX;
            const y = e.offsetY;

            btns[activeNum].appendChild(circle);

            /*position circle*/
            circle.style.left = `${x}px`;
            circle.style.top = `${y}px`;
            circle.style.transform = "translate(-50%, -50%)";

            const rippleAnim = circle.animate(
                [
                    {
                        transform: "translate(-50%, -50%) scale(1)",
                        opacity: "0.4",
                    },
                    {
                        transform: "translate(-50%, -50%) scale(100)",
                        opacity: "0",
                    },
                ],
                {
                    duration: 500,
                    easing: "ease-in-out",
                    fill: "forwards",
                },
            );
            rippleAnim.finished.then(() => {
                circle.remove();
            });
        });
    }
};

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

/*------------------------------------------------------------------------------------------------------------------------------------------------*/



const mobileMenu = document.getElementById("mobileMenu");
const burgerBtn = document.getElementById("burgerBtn")

burgerBtn?.addEventListener("click",() => {
    mobileMenu?.classList.toggle("hidden");
})
