import { CommentCard } from "../Components/CommentCard.js";
export class Comment {
    constructor() {}

    static appendcomment(row) {
        row.innerHTML += CommentCard("", "hola", "balo", "32", "http");
    }
}
