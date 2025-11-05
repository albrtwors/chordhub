import Section from "./Section";
import Form from "./Form";
import { type, id, userId } from "../../constants/constants";
export default function Item({ commentMeta }) {
    const { comment, img, responses, setComments, commentId, name } =
        commentMeta;

    return (
        <>
            <div className="d-flex gap-2">
                <div>
                    <img width="100" height="100" src={img}></img>
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
