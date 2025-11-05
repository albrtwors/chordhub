import { useState } from "react";
import { motion } from "motion/react";
export default function Input({ name, pattern, title, type, children }) {
    const [matched, setMatched] = useState("");
    const [error, setError] = useState(null);
    const regex = new RegExp(pattern);
    function handleKey(e) {
        if (e.target.value === "") {
            setError(null);
            setMatched("");
            return;
        }

        if (e.target.value.match(regex)) {
            setMatched("success");
            setError(null);
        } else {
            setMatched("wrong");
            setError(title);
        }
    }

    function handlePass(el) {
        if (el.getAttribute("type") == "password") {
            el.setAttribute("type", "text");
        } else {
            el.setAttribute("type", "password");
        }
    }

    return (
        <div className="d-flex flex-column gap-2">
            <div className="d-flex gap-3">
                <input
                    onKeyUp={(e) => {
                        handleKey(e);
                    }}
                    required
                    type={type}
                    name={name}
                    id={name}
                    pattern={pattern}
                    placeholder={children}
                    title={title}
                    className={`form form-control ${matched}`}
                />
                {type == "password" && (
                    <button
                        type="button"
                        className="toggle-password"
                        aria-label="Mostrar contraseña"
                        onClick={() => {
                            handlePass(document.querySelector(`#${name}`));
                        }}
                    >
                        <i className="fas fa-eye"></i>
                    </button>
                )}
            </div>

            {error && (
                <motion.div
                    initial={{ opacity: 0 }}
                    animate={{ opacity: 1 }}
                    className="p-2 rounded-2 border-2 border-danger bg-danger-subtle text-danger"
                >
                    {error}
                </motion.div>
            )}
        </div>
    );
}
