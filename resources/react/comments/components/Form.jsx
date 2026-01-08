import { type, id } from "../../constants/constants";
export default function Form({ setComments, parentId }) {
    function handleSubmit(e) {
        e.preventDefault();

        let expType = "";
        switch (type) {
            case "song":
                expType = "App\\Models\\Song";
                break;
            case "chord":
                expType = "App\\Models\\Chord";
                break;
            case "file":
                expType = "App\\Models\\File";
                break;
        }
        const form = new FormData(e.target);
        fetch(`http://127.0.0.1:8000/comments`, {
            method: "POST",
            body: JSON.stringify({
                comment: form.get("text"),
                postid: id,
                postype: expType,
                parentid: parentId,
            }),
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
        })
            .then((res) => res.json())
            .then((data) => {
                e.target.reset();
                console.log(data);
                const newComments = data.comments.original;
                setComments(newComments);
            });
    }
    return (
        <div>
            <form
                className="d-flex flex-column gap-3 mt-3"
                onSubmit={(e) => handleSubmit(e)}
                id="commentForm"
                action=""
            >
                <textarea name="text" id="" className="form-control"></textarea>
                <div>
                    <button className="btn btn-primary">
                        Subir comentario
                    </button>
                </div>
            </form>
        </div>
    );
}
