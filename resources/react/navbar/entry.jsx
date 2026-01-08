import { useEffect, useState } from "react";
import { createRoot } from "react-dom/client";
import Navbar from "./components/Navbar";
createRoot(document.getElementById("navbar-widget")).render(<App />);

function App() {
    return <Navbar></Navbar>;
}
