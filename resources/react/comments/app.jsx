import { createRoot } from "react-dom/client";
import { useEffect, useState, createContext } from "react";
import useComments from "../hooks/useComments";
import Section from "./components/Section";
import Form from "./components/Form";
import { type, id, userId } from "../constants/constants";

createRoot(document.getElementById("comment-widget")).render(<Widget></Widget>);

export const CommentContext = createContext();
function Widget() {
    const { comments, setComments } = useComments();

    return (
        <div className="m-5">
            <h3 className="fw-bold">Comentarios</h3>
            {comments.length > 0 ? (
                <Section
                    comments={comments}
                    commentData={{
                        setComments,
                        type,
                        id,
                        userId,
                    }}
                ></Section>
            ) : (
                "Aún no hay comentarios"
            )}
            <Form
                comments={comments}
                setComments={setComments}
                type={type}
                id={id}
                userId={userId}
            ></Form>
        </div>
    );
}
