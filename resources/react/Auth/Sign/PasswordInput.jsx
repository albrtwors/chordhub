import { useState } from "react";
import { motion } from "motion/react";
export default function PasswordInput({ pattern, title }) {
    const [matched, setMatched] = useState({ p1: "", p2: "" });
    const [error, setError] = useState({ p1: null, p2: null });
    const [bothMatches, setBothMatches] = useState(true);
    const regex = new RegExp(pattern);

    function handleKey(e) {
        if (e.target.value === "") {
            if (e.target.getAttribute("id") == "password") {
                setMatched({ ...matched, p1: null });
                setError({ ...error, p1: null });
                return;
            } else {
                setMatched({ ...matched, p2: null });
                setError({ ...error, p2: null });
                return;
            }
        }

        if (e.target.value.match(regex)) {
            if (e.target.getAttribute("id") == "password") {
                setMatched({ ...matched, p1: "success" });
                setError({ ...error, p1: null });
            } else {
                setMatched({ ...matched, p2: "success" });
                setError({ ...error, p2: null });
            }
        } else {
            if (e.target.getAttribute("id") == "password") {
                setMatched({ ...matched, p1: "wrong" });
                setError({ ...error, p1: title });
            } else {
                setMatched({ ...matched, p2: "wrong" });
                setError({ ...error, p2: title });
            }
        }
        checkBoth();
    }

    function handlePass(el) {
        if (el.getAttribute("type") == "password") {
            el.setAttribute("type", "text");
        } else {
            el.setAttribute("type", "password");
        }
    }

    function checkBoth() {
        if (
            document.getElementById("password").value.length > 0 &&
            document.getElementById("password_confirmation").value.length > 0
        ) {
            if (
                document.getElementById("password").value ==
                document.getElementById("password_confirmation").value
            ) {
                setBothMatches(true);
            } else {
                setBothMatches(false);
            }
        }
    }

    return (
        <div className="d-flex flex-column gap-4 mb-4">
            <div className="d-flex gap-3">
                <input
                    onKeyUp={(e) => {
                        handleKey(e);
                    }}
                    type="password"
                    name="password"
                    required
                    id="password"
                    pattern={pattern}
                    placeholder="Contraseña"
                    title={title}
                    className={`form form-control ${matched.p1}`}
                />

                <button
                    type="button"
                    className="toggle-password"
                    aria-label="Mostrar contraseña"
                    onClick={() => {
                        handlePass(document.querySelector(`#password`));
                    }}
                >
                    <i className="fas fa-eye"></i>
                </button>
            </div>
            {error.p1 && (
                <motion.div
                    initial={{ opacity: 0 }}
                    animate={{ opacity: 1 }}
                    className="p-2 rounded-2 border-2 border-danger bg-danger-subtle text-danger"
                >
                    {error.p1}
                </motion.div>
            )}
            <div className="d-flex gap-3">
                <input
                    onKeyUp={(e) => {
                        handleKey(e);
                    }}
                    type="password"
                    required
                    name="password_confirmation"
                    id="password_confirmation"
                    pattern={pattern}
                    placeholder="Repite la contraseña"
                    title="Repite tu contraseña"
                    className={`form form-control ${matched.p2}`}
                />

                <button
                    type="button"
                    className="toggle-password"
                    aria-label="Mostrar contraseña"
                    onClick={() => {
                        handlePass(
                            document.querySelector(`#password_confirmation`)
                        );
                    }}
                >
                    <i className="fas fa-eye"></i>
                </button>
            </div>

            {error.p2 && (
                <motion.div
                    initial={{ opacity: 0 }}
                    animate={{ opacity: 1 }}
                    className="p-2 rounded-2 border-2 border-danger bg-danger-subtle text-danger"
                >
                    {error.p2}
                </motion.div>
            )}

            {!bothMatches && (
                <motion.div
                    initial={{ opacity: 0 }}
                    animate={{ opacity: 1 }}
                    className="p-2 rounded-2 border-2 border-danger bg-danger-subtle text-danger"
                >
                    Ambas Contraseñas deben coincidir"
                </motion.div>
            )}
        </div>
    );
}
