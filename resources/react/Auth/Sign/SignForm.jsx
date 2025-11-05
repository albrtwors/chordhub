import { useRef, useState } from "react";
import "./styles.css";

import Input from "./Input";
import PasswordInput from "./PasswordInput";
export default function SignForm() {
    const [rightInput, setRightInput] = useState("untouched");

    return (
        <div className="d-flex flex-column gap-4">
            <Input
                name={"email"}
                type="email"
                pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"
                title={"Tu email debe ser del tipo: a@b.c"}
            >
                Correo Electrónico
            </Input>
            <Input
                name={"name"}
                type="text"
                pattern="^[a-zA-Z][a-zA-Z0-9]{7,14}$"
                title={
                    "El nombre de usuario debe tener al menos 8 caracteres y solo letras, números o guiones bajos, además de comenzar con letras"
                }
            >
                Nombre de usuario
            </Input>
            <PasswordInput
                title="Debe tener 8-15 caracteres, al menos una mayúscula e incluir 3 o mas números"
                pattern="^(?=.*[A-Z])(?=(?:.*\d){3})[A-Za-z\d]{8,15}$"
            ></PasswordInput>
        </div>
    );
}
