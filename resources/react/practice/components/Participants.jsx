import { div, h1, li } from "motion/react-client";
import { useEffect, useState } from "react";
import { createRoot } from "react-dom/client";
import ParticipantTile from "./ParticipantTile";
import UserTile from "./UserTile";
import ParticipantMenuByName from "./ParticipantMenuByName";
import Implement from "./Implement";
import ParticipantMenuByUser from "./ParticipantMenuByUser";
import ImplementsModal from "./ImplementsModal";
createRoot(document.getElementById("participants-widget")).render(<App></App>);

function App() {
    const [participants, setParticipants] = useState(["Pepe", "Maria"]);
    const [userParticipants, setUserParticipants] = useState([]);
    const [participantMenu, setParticipantMenu] = useState("byname");
    const [items, setItems] = useState(null);
    const [selectedParticipant, setSelectedParticipant] = useState("");
    const [modal, setModal] = useState(false);
    useEffect(() => {
        fetch("/api/items")
            .then((res) => res.json())
            .then((data) => {
                setItems(data.items.splice(0, 0));
            });
    }, []);
    return (
        <div className="row">
            {participantMenu == "byname" ? (
                <input
                    name="participants"
                    id="participants"
                    type="text"
                    className="d-none"
                />
            ) : (
                <input
                    name="userParticipants"
                    id="userParticipants"
                    type="text"
                    className="d-none"
                />
            )}

            <input name="items" id="items" type="text" className="d-none" />
            <div className="d-flex col-xl-4 gap-3 flex-column">
                <label htmlFor="" className="fw-bold">
                    Integrantes
                </label>
                <div className="d-flex gap-2">
                    <label
                        onClick={() => setParticipantMenu("byname")}
                        className={`btn ${
                            participantMenu == "byname" &&
                            "bg-primary-subtle text-primary"
                        }  fw-bold`}
                        htmlFor=""
                    >
                        Por Nombre
                    </label>

                    <label
                        onClick={() => setParticipantMenu("byuser")}
                        className={`btn  ${
                            participantMenu == "byuser" &&
                            "bg-primary-subtle text-primary"
                        }  fw-bold`}
                        htmlFor=""
                    >
                        Por Usuario
                    </label>
                </div>

                {participantMenu == "byname" ? (
                    <ParticipantMenuByName
                        setParticipants={setParticipants}
                        selectedParticipant={selectedParticipant}
                        participants={participants}
                        setSelectedParticipant={setSelectedParticipant}
                    />
                ) : (
                    <ParticipantMenuByUser
                        userParticipants={userParticipants}
                        setUserParticipants={setUserParticipants}
                    />
                )}
            </div>
            <div className="d-flex col-xl-4  gap-3 flex-column">
                <label htmlFor="" className="fw-bold">
                    Equipo Necesario
                </label>
                <div>
                    <ul
                        style={{ maxHeight: 200, overflowY: "scroll" }}
                        className="list-group"
                    >
                        {items?.map((item, key) => (
                            <li key={key} className="list-group-item">
                                <span>
                                    {item.name} (x{item.quantity})
                                </span>
                                <div className="d-flex w-100 justify-content-end">
                                    <i
                                        onClick={() => {
                                            let newItems = items.filter(
                                                (it) => item != it
                                            );
                                            setItems(newItems);
                                            document.getElementById(
                                                "items"
                                            ).value = JSON.stringify(newItems);
                                        }}
                                        style={{ cursor: "pointer" }}
                                        className="fas fa-times"
                                    ></i>
                                </div>
                            </li>
                        ))}
                    </ul>
                </div>
                <div className="d-flex">
                    <button
                        type="button"
                        onClick={() => setModal(true)}
                        className="btn btn-primary"
                    >
                        Añadir Implementos
                    </button>
                </div>
                <ImplementsModal
                    setItems={setItems}
                    items={items}
                    setModal={setModal}
                    modal={modal}
                />
            </div>
        </div>
    );
}
