import { useState, useEffect } from "react";
import { type, id, userId } from "../constants/constants";
import getComments from "../services/getComments";
export default function useComments() {
    const [comments, setComments] = useState([]);

    useEffect(() => {
        const setNewComments = async () => {
            const newComments = await getComments(id, type);
            setComments(newComments);
        };
        setNewComments();
    }, []);

    return { comments, setComments };
}
