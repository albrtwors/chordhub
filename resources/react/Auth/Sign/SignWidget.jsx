import { createRoot } from "react-dom/client";
import SignForm from "./SignForm";
createRoot(document.getElementById("sign-widget")).render(<App />);

function App() {
    return <SignForm />;
}
