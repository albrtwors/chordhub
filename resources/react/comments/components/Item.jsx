import Section from "./Section";
import Form from "./Form";
import { useState } from "react";
import { type, id, userId } from "../../constants/constants";
export default function Item({ commentMeta }) {
    const { comment, userId, img, responses, setComments, commentId, name } =
        commentMeta;

    const [deleted, setDeleted] = useState(0);
    async function handleDelete() {
        fetch(`/comentarios/${commentId}/eliminar`, {
            method: "POST",
            body: JSON.stringify({
                id: commentId,
            }),
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
        })
            .then((response) => response.json())
            .then((data) => {
                console.log(data);
                setComments(data.comments);
            });
    }
    return (
        <>
            <div className="d-flex gap-2">
                <div>
                    <img
                        className="rounded-circle"
                        width="100"
                        height="100"
                        src={img}
                    ></img>
                </div>
                <div className="flex-1 flex-column">
                    <h4 className="fw-bold">{name}</h4>
                    <p>{comment}</p>
                </div>
            </div>
            <div className="d-flex gap-2">
                <button
                    data-toggle="collapse"
                    data-target={`#response-${commentId}`}
                    className="btn btn-primary"
                >
                    Responder
                </button>
                {responses.length > 0 ? (
                    <button
                        data-toggle="collapse"
                        data-target={`#responses-${commentId}`}
                        className="btn btn-primary"
                    >
                        Mostrar {responses.length + " "}
                        {responses.length > 1 ? "respuestas" : "respuesta"}
                    </button>
                ) : (
                    ""
                )}
                {document.getElementById("userId").value == userId ? (
                    <button onClick={handleDelete} className="btn btn-danger">
                        Eliminar
                    </button>
                ) : (
                    ""
                )}
            </div>
            <div id={`response-${commentId}`} className="collapse">
                <Form
                    setComments={setComments}
                    type={type.value}
                    id={id.value}
                    userId={userId.value}
                    parentId={commentId ? commentId : null}
                ></Form>
            </div>

            {responses ? (
                <div className="collapse" id={`responses-${commentId}`}>
                    <Section
                        comments={responses}
                        commentData={{
                            setComments,
                            type,
                            id,
                            userId,
                        }}
                    ></Section>
                </div>
            ) : (
                ""
            )}
        </>
    );
}
