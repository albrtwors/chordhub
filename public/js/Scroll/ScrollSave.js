const scrollKey = "scrollPosition_" + window.location.pathname;
const scrollId = document.getElementById('scroll_position');
window.addEventListener("scroll", function () {
    localStorage.setItem(scrollKey, window.scrollY);
});

document.addEventListener("DOMContentLoaded", function () {
    Object.keys(localStorage).forEach((key) => {
        if (key.startsWith("scrollPosition_") && key !== scrollKey) {
            localStorage.removeItem(key);
        }
    });

    const scrollY = localStorage.getItem(scrollKey);
    if (scrollY !== null) {
        window.scrollTo(0, parseInt(scrollY));
    }

    if(scrollId){
        const scrollPosition = scrollId.value;
        if(scrollPosition){
            window.scrollTo(0, parseInt(scrollPosition));
    }
});


