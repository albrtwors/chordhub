const completeHelper = (element) => {
    const span = document.createElement("span");
    if (element.getAttribute("name") == "email") {
        span.style.cssText = `
        position: absolute;
        padding: 10px 20px;
        border-radius: 30px;
        background: #f1f1f1;
        top: -60px;
        left: 0;
        z-index: 1000;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        font-size: 14px;
        transition: all 0.3s ease;
    `;
    } else {
        span.style.cssText = `
        position: absolute;
        padding: 10px 20px;
        border-radius: 30px;
        background: #f1f1f1;
        top: -120px;
        left: 0;
        z-index: 1000;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        font-size: 14px;
        transition: all 0.3s ease;
    `;
    }

    span.innerHTML = element.getAttribute("data-validate");

    if (getComputedStyle(element.parentElement).position === "static") {
        element.parentElement.style.position = "relative";
    }

    element.parentElement.appendChild(span);

    const removeSpan = () => {
        if (span.parentNode) {
            span.remove();
        }
        element.removeEventListener("blur", removeSpan);
        element.removeEventListener("keypress", removeSpan);
    };

    element.addEventListener("blur", removeSpan);
    element.addEventListener("keypress", removeSpan);
};
