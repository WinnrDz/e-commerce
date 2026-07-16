import "./bootstrap";
import.meta.glob(["../fonts/**"]);


/*---------------------------------------------------------------------------------------------------------------------------------------*/

/*

Selectable Buttons

example of vars

const detailBtnsCont = document.getElementById("detailBtnsCont");
const detailBtnsArray = Array.from(detailBtnsCont.children);

const sizeBtnsCont = document.getElementById("sizeBtnsCont");
const sizeBtnsArray = Array.from(sizeBtnsCont.children);

*/

const setupSelectableButtons = function (btns,styles) {
    for (let activeNum = 0;activeNum < btns.length ; activeNum++) {
    btns[activeNum].addEventListener("click", (e) => {
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
        /*style selected buttons the ... spread the array of strings*/

        for (let i = 0; i < btns.length; i++) {
        btns[i].classList.remove(...styles.active);
        btns[i].classList.add(...styles.inactive);
        }
        btns[activeNum].classList.remove(...styles.inactive);
        btns[activeNum].classList.add(...styles.active);

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
            }
        );
        rippleAnim.finished.then(() => {
            circle.remove();
        });
    });
    }
};
/* example of calling the function

    setupSelectableButtons(detailBtnsArray, {
        active: ["font-satoshim"],
        inactive: ["opacity-60","border-black/10"],
        rippleColor: "rgba(0, 0, 0, 0.08)"
    });

    setupSelectableButtons(sizeBtnsArray, {
        active: ["text-white","bg-black"],
        inactive: ["text-black/60","hover:bg-[#EAEAEA]"],
        rippleColor : "rgba(255, 255, 255, 0.3)"
    });
    */
/*---------------------------------------------------------------------------------------------------------------------------------------*/

window.leftArrow = async function () {
    const parent = document.getElementById("customersParent");
    const children = Array.from(parent.children);

    const first = parent.firstElementChild;
    const last = parent.lastElementChild;

    children.forEach((v, i) => {
        if (i == 4) v.classList.remove("blur-[1.75px]");
        if (i == 1)
            v.classList.add(
                "transition-transform",
                "duration-300",
                "ease-in-out",
                "blur-[1.75px]",
            );
        if (i != 0) {
            v.classList.add(
                "transition-transform",
                "duration-300",
                "ease-in-out",
            );
            v.style.transform = v.style.transform + `translatex(-106%)`;
        } else {
            v.classList.add(
                "transition-transform",
                "duration-300",
                "ease-in-out",
                "blur-[1.75px]",
            );
            v.style.transform = `translatex(425%)`;
        }
    });

    await new Promise((r) => setTimeout(r, 300));

    parent.insertBefore(first, last.nextSibling);

    children.forEach((v, i) => {
        v.classList.remove(
            "transition-transform",
            "duration-300",
            "ease-in-out",
        );
        v.style.transform = "";
    });
};

window.rightArrow = async function () {
    const parent = document.getElementById("customersParent");
    const children = Array.from(parent.children);

    const first = parent.firstElementChild;
    const last = parent.lastElementChild;

    children.forEach((v, i) => {
        if (i == 0) v.classList.remove("blur-[1.75px]");
        if (i == 3)
            v.classList.add(
                "transition-transform",
                "duration-300",
                "ease-in-out",
                "blur-[1.75px]",
            );
        if (i != 4) {
            v.classList.add(
                "transition-transform",
                "duration-300",
                "ease-in-out",
            );
            v.style.transform = v.style.transform + `translatex(106%)`;
        } else {
            v.classList.add(
                "transition-transform",
                "duration-300",
                "ease-in-out",
                "blur-[1.75px]",
            );
            v.style.transform = `translatex(-425%)`;
        }
    });

    await new Promise((r) => setTimeout(r, 300));

    parent.insertBefore(last, first);

    children.forEach((v, i) => {
        v.classList.remove(
            "transition-transform",
            "duration-300",
            "ease-in-out",
        );
        v.style.transform = "";
    });
};
