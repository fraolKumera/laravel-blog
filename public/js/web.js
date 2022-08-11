window.$crisp = [];
window.CRISP_WEBSITE_ID = "2f083f73-4a47-42ac-92de-d6f13d0e4408";
(function () {
    d = document;
    s = d.createElement("script");
    s.src = "https://client.crisp.chat/l.js";
    s.async = 1;
    d.getElementsByTagName("div")[0].appendChild(s);
})();

//////////////////////// Modal ////////////////////////////

let modal = document.getElementById("modal");
let tog = false;

function toggle() {
    tog = tog !== true;
}

$('body').click(function (event) {
    if (!$(event.target).closest('#openModal').length && !$(event.target).is('#openModal')) {
        tog = false;
    }
});

function modalHandler(val) {
    toggle(val);
    if (val) {
        fadeIn(modal);
    } else {
        fadeOut(modal);
    }
}

function fadeOut(el) {
    el.style.opacity = 1;
    (function fade() {
        if ((el.style.opacity -= 0.1) < 0) {
            el.style.display = "none";
        } else {
            requestAnimationFrame(fade);
        }
    })();
}

function fadeIn(el, display) {
    el.style.opacity = 0;
    el.style.display = display || "flex";
    (function fade() {
        let val = parseFloat(el.style.opacity);
        if (!((val += 0.2) > 1)) {
            el.style.opacity = val;
            requestAnimationFrame(fade);
        }
    })();
}
