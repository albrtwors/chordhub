export default function ParticipantTile({
    name,
    participants,
    setParticipants,
}) {
    return (
        <div className="col-xl-4 btn bg-primary-subtle text-primary">
            {name}
            <i
                onClick={() => {
                    let newParticipants = participants.filter((p) => name != p);
                    setParticipants(newParticipants);
                    document.getElementById("participants").value =
                        newParticipants;
                }}
                style={{ cursor: "hover" }}
                className=" ms-3 fas fa-times"
            ></i>
        </div>
    );
}
