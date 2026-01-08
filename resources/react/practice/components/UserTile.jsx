export default function UserTile({ user }) {
    return (
        <div class="col-xl-4 btn bg-primary-subtle text-primary">
            {user.name}
            <i
                onClick={() => {}}
                style={{ cursor: "hover" }}
                class=" ms-3 fas fa-times"
            ></i>
        </div>
    );
}
