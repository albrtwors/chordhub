export default async function getComments(id, type) {
    return fetch(`http://127.0.0.1:8001/comentarios/${id}/${type}`)
        .then((res) => res.json())
        .then((data) => {
            return data;
        });
}
