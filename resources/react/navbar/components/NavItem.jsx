import Divider from "./Divider";
import { useState } from "react";
import { Alert } from "../../../../public/js/Classes/Alerts";
export default function NavItem({
    uri,
    text,
    type = "item",
    icon = "music",
    permission,
    permissions,
}) {
    const [hasPermission, setHasPermission] = useState(false);
    function restoreDB() {
        fetch("/backup")
            .then((res) => res.json())
            .then((data) => {
                if (data.status == "success") {
                    Alert.SuccessAlert(data.message);
                } else {
                    Alert.ErrorAlert(data.message);
                }
            });
    }
    // if (permissions && !hasPermission) {
    //     if (permissions.some((per) => per.name == permission)) {
    //         setHasPermission(true);
    //     }
    //     // for (var i = 0; i < permissions.length; i++) {
    //     //     if (permission == permissions[i].name && !hasPermission) {
    //     //         setHasPermission(true);
    //     //         break;
    //     //     }
    //     // }
    // }
    // if (!hasPermission) return null;
    if (type == "db") {
        return (
            <li
                style={{ cursor: "pointer" }}
                onClick={() => {
                    restoreDB();
                }}
                className="nav-item"
            >
                <a style={{ fontSize: 15 }} className="nav-link">
                    <i className="fas fa-database"></i>
                    {text}
                </a>
            </li>
        );
    }
    return type == "item" ? (
        <li
            className={`nav-item ${
                window.location.href == uri ? "active" : ""
            }`}
        >
            <a className="nav-link" href={uri}>
                <i className={`fas fa-fw fa-${icon}`}></i>
                <span>{text}</span>
            </a>
        </li>
    ) : (
        <div>
            <div className="sidebar-heading">{text}</div>
            <Divider></Divider>
        </div>
    );
}
