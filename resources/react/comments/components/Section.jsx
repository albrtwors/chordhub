import { useEffect, useState, useContext } from "react";
import Item from "./Item.jsx";
import Form from "./Form.jsx";
import { CommentContext } from "../app.jsx";

export default function Section({ comments, commentData }) {
    const { setComments, type, id, userId } = commentData;

    const formattedComments = comments?.map((comment) => (
        <Item
            key={comment.id}
            commentMeta={{
                img: comment.user.image
                    ? comment.user.image.url
                    : "https://cdn-icons-png.flaticon.com/512/8791/8791450.png",
                name: comment.user.name,
                comment: comment.comment,
                responses: comment.responses,
                setComments,
                commentId: comment.id,
            }}
        ></Item>
    ));

    return (
        <div className="d-flex ms-3 flex-column gap-3">{formattedComments}</div>
    );
}
