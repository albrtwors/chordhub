import { useEffect, useState } from "react";
import Implement from "./Implement";
import { Alert } from "../../../../public/js/Classes/Alerts";

export default function ImplementsModal({
    modal,
    setModal,
    items,
    setItems,
    selectedItems,
}) {
    const [selected, setSelected] = useState(null);
    const [implement, setImplements] = useState(null);
    const [quantity, setQuantity] = useState(null);
    const [search, setSearch] = useState(null);
    useEffect(() => {
        if (search) {
            fetch(`/api/items/${search}`)
                .then((res) => res.json())
                .then((data) => {
                    setImplements(data.items);
                });
        } else {
            fetch(`/api/items`)
                .then((res) => res.json())
                .then((data) => {
                    setImplements(data.items);
                });
        }
    }, [search]);
    if (modal) {
        return (
            <div
                style={{
                    transitionDuration: "300ms",
                    position: "fixed",
                    display: "flex",
                    justifyContent: "center",
                    alignItems: "center",
                    top: 0,
                    left: 0,
                    height: "100%",
                    width: "100%",
                    zIndex: 300,
                    background: "#000000aa",
                }}
            >
                <div
                    style={{ maxHeight: 500, overflowY: "scroll" }}
                    className="p-3 d-flex gap-1 w-50 flex-column rounded bg-white align-items-center"
                >
                    <div className="d-flex w-100 justify-content-start">
                        <i
                            style={{ cursor: "pointer" }}
                            onClick={() => setModal(false)}
                            className="fas fa-times"
                        ></i>
                    </div>

                    <h6 className="fw-bold">Implementos</h6>
                    <input
                        type="text"
                        onChange={(e) => {
                            setSearch(e.target.value);
                        }}
                        className="form-control"
                        placeholder="Bajo Electrico, Piano ..."
                    />
                    <div className="row h-50" style={{ overflowY: "scroll" }}>
                        {implement.map((imp, key) => (
                            <Implement
                                key={key}
                                selected={selected}
                                setSelected={setSelected}
                                name={imp.name}
                                implement={imp}
                            ></Implement>
                        ))}
                    </div>
                    <div className="d-flex gap-3 justify-content-center">
                        <label htmlFor="" className="fw-bold">
                            Cantidad:
                        </label>
                        <input
                            onChange={(e) => {
                                setQuantity(e.target.value);
                            }}
                            type="number"
                            className="form-control col-xl-4"
                            placeholder="3..."
                        />
                        <button
                            type="button"
                            onClick={() => {
                                if (
                                    items.filter((im) => {
                                        return im.name === selected.name;
                                    }).length > 0
                                ) {
                                    Alert.ErrorAlert("Ya incluiste este Item");
                                    return;
                                }

                                if (quantity > selected.quantity) {
                                    Alert.ErrorAlert(
                                        "El item supera la Cantidad disponible"
                                    );
                                    return;
                                }

                                let newSelected = {
                                    ...selected,
                                    quantity: quantity ? quantity : 1,
                                };
                                setItems([...items, newSelected]);
                                document.getElementById("items").value =
                                    JSON.stringify([...items, newSelected]);

                                console.log([...items, newSelected]);
                            }}
                            className="btn btn-primary"
                        >
                            Añadir
                        </button>
                    </div>
                </div>
            </div>
        );
    }
}
