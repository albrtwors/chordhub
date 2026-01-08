import { useState, useEffect } from "react";
import { Alert } from "../../../../public/js/Classes/Alerts";
export default function ParticipantMenuByUser({
    userParticipants,
    setUserParticipants,
}) {
    const [search, setSearch] = useState(null);
    const [users, setUsers] = useState([]);
    useEffect(() => {
        if (search) {
            fetch(`/api/user/${search}`)
                .then((res) => res.json())
                .then((data) => {
                    setUsers(data.users);
                });
        }
    }, [search]);
    return (
        <>
            <input
                onChange={(e) => setSearch(e.target.value)}
                id="participant-input"
                placeholder="alberto1234, maria32..."
                type="text"
                className="form-control w-50"
            />

            <div className="list-group mb-3">
                {users.map((user) => (
                    <div className="list-group-item d-flex gap-3">
                        <img
                            src={
                                user.image
                                    ? user.image.url
                                    : "https://cdn-icons-png.flaticon.com/512/8791/8791450.png"
                            }
                            style={{ width: 50, height: 50 }}
                            alt=""
                        />
                        {user.name}
                        <div className="w-100 d-flex justify-content-end">
                            <div>
                                <button
                                    onClick={() => {
                                        if (
                                            userParticipants.filter((use) => {
                                                return use.name == user.name;
                                            }).length > 0
                                        ) {
                                            Alert.ErrorAlert(
                                                "Ya incluiste a este usuario"
                                            );
                                            return;
                                        }
                                        setUserParticipants([
                                            ...userParticipants,
                                            user,
                                        ]);
                                        document.getElementById(
                                            "userParticipants"
                                        ).value = JSON.stringify([
                                            ...userParticipants,
                                            user,
                                        ]);
                                    }}
                                    className="btn btn-primary"
                                    type="button"
                                >
                                    +
                                </button>
                            </div>
                        </div>
                    </div>
                ))}
            </div>
            <div className="d-flex flex-column">
                <label htmlFor="" className="fw-bold">
                    Tus Participantes
                </label>
                {userParticipants.map((part) => (
                    <li className="list-group-item d-flex gap-3">
                        <img
                            src={
                                part.image
                                    ? part.image.url
                                    : "https://cdn-icons-png.flaticon.com/512/8791/8791450.png"
                            }
                            width="20"
                            height="20"
                        />
                        {part.name}
                        <div className="w-100 d-flex justify-content-end">
                            <div>
                                <button
                                    onClick={() => {
                                        const newArray =
                                            userParticipants.filter(
                                                (p) => p.name != part.name
                                            );
                                        setUserParticipants(newArray);
                                        document.getElementById(
                                            "userParticipants"
                                        ).value = JSON.stringify(newArray);
                                    }}
                                    className="btn btn-danger"
                                    type="button"
                                >
                                    -
                                </button>
                            </div>
                        </div>
                    </li>
                ))}
            </div>
        </>
    );
}
