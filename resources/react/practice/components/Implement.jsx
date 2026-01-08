export default function Implement({ implement, name, setSelected, selected }) {
    let selectedStyle = "";
    if (selected == implement) selectedStyle = "bg-success-subtle";
    return (
        <div
            style={{ transitionDuration: "300ms" }}
            className={`rounded p-3 d-flex w-50 flex-column align-items-center ${selectedStyle}`}
        >
            <img
                src={
                    implement.image
                        ? implement.image.url
                        : "https://clipart-library.com/2023/musical-notes-2-half-notes-clipart.png"
                }
                onClick={() => setSelected(implement)}
                style={{ width: 100, height: 100, cursor: "pointer" }}
                className={`rounded `}
            ></img>
            <label htmlFor="" className="fw-bold">
                {implement.name} (x{implement.quantity})
            </label>
        </div>
    );
}
