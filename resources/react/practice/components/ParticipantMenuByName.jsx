import ParticipantTile from "./ParticipantTile";
import { useEffect } from "react";
export default function ParticipantMenuByName({
    setSelectedParticipant,
    selectedParticipant,
    setParticipants,
    participants,
}) {
    useEffect(() => {
        document.getElementById("participants").value = [...participants];
    }, []);
    return (
        <>
            <input
                onChange={(e) => setSelectedParticipant(e.target.value)}
                id="participant-input"
                placeholder="Pedro, Marta..."
                type="text"
                className="form-control w-50"
            />
            <div className="d-flex">
                <button
                    type="button"
                    onClick={() => {
                        if ("" != selectedParticipant) {
                            let input =
                                document.getElementById("participant-input");
                            input.value = "";
                            setParticipants([
                                ...participants,
                                selectedParticipant,
                            ]);
                            document.getElementById("participants").value = [
                                ...participants,
                                selectedParticipant,
                            ];
                            input.focus();
                        }
                    }}
                    className="btn btn-primary"
                >
                    Añadir
                </button>
            </div>

            <div className="row gap-3">
                {participants.map((participant, key) => (
                    <ParticipantTile
                        key={key}
                        setParticipants={setParticipants}
                        participants={participants}
                        name={participant}
                    />
                ))}
            </div>
        </>
    );
}
