class Scroll {
    static save() {
        /
        localStorage.setItem("scrollPosition", window.scrollY);
    }

    static load() {
        
        const posicion = localStorage.getItem("scrollPosition");
        if (posicion !== null) {
            window.scrollTo(0, parseInt(posicion));
            localStorage.removeItem("scrollPosition"); // Limpia después
        }
    }
}
