import Divider from "./Divider";
import NavItem from "./NavItem";
import { useEffect, useState } from "react";
const routes = [
    {
        component: "x-app.nav-item",
        props: {
            text: "Dashboard",

            icon: "tachometer-alt",
            uri: "http://127.0.0.1:8000/chordhub",
        },
    },

    {
        component: "x-app.nav-header",
        props: {
            text: "Canciones",
            type: "header",
            permission: "songs.index",
        },
    },
    {
        component: "x-app.nav-item",
        props: {
            text: "Ver Canciones",
            isActive:
                "{{ request()->is('canciones') || (request()->is('canciones/*') && !request()->is('canciones/create') && !request()->is('canciones/*/edit')) }}",
            icon: "music",
            permission: "songs.index",
            uri: "http://127.0.0.1:8000/canciones",
        },
    },
    {
        component: "x-app.nav-item",
        props: {
            text: "Crear Canción",
            isActive: "{{ request()->is('canciones/create') }}",
            permission: "songs.create",
            icon: "plus",

            uri: "http://127.0.0.1:8000/canciones/create",
        },
    },
    {
        component: "x-app.nav-header",
        props: {
            text: "Tus Canciones",
            type: "header",
            permission: "songs.edit",
        },
    },
    {
        component: "x-app.nav-item",
        props: {
            text: "Modificar Canción",
            isActive:
                "{{ request()->is('canciones/edit') || request()->is('cancion/editar') }}",
            icon: "wrench",
            permission: "songs.edit",
            uri: "http://127.0.0.1:8000/cancion/editar",
        },
    },
    {
        component: "x-app.nav-item",
        props: {
            text: "Eliminar Canción",
            isActive: "{{ request()->is('cancion/eliminar') }}",
            icon: "trash",
            permission: "songs.destroy",
            uri: "http://127.0.0.1:8000/cancion/eliminar",
        },
    },
    {
        component: "x-app.nav-header",
        props: {
            text: "CANCIONEROS",
            type: "header",
            permission: "songlists.index",
        },
    },
    {
        component: "x-app.nav-item",
        props: {
            icon: "clipboard-list",
            isActive:
                "{{ (request()->is('cancioneros*') && !request()->is('cancioneros/create') && !request()->is('cancioneros/*/edit')) || request()->is('cancionero/*/cancion/*') ? 'active' : '' }}",
            text: "Ver Cancioneros",
            permission: "songlists.index",
            uri: "http://127.0.0.1:8000/cancioneros",
        },
    },
    {
        component: "x-app.nav-item",
        props: {
            icon: "folder-open",
            isActive:
                "{{ request()->is('cancioneros/create') ? 'active' : '' }}",
            text: "Crear Cancionero",
            permission: "songlists.create",
            uri: "http://127.0.0.1:8000/cancioneros/create",
        },
    },
    {
        component: "x-app.nav-header",
        props: {
            text: "TUS CANCIONEROS",
            permission: "songlists.edit",
            type: "header",
        },
    },
    {
        component: "x-app.nav-item",
        props: {
            icon: "hammer",
            isActive:
                "{{ request()->is('cancionero/modificar') || request()->is('cancioneros/*/edit') ? 'active' : '' }}",
            text: "Modificar Cancionero",
            permission: "songlists.edit",
            uri: "http://127.0.0.1:8000/cancionero/modificar",
        },
    },
    {
        component: "x-app.nav-item",
        props: {
            icon: "trash",
            isActive:
                "{{ request()->is('cancionero/eliminar') ? 'active' : '' }}",
            text: "Eliminar Cancionero",
            permission: "songlists.destroy",
            uri: "http://127.0.0.1:8000/cancionero/eliminar",
        },
    },
    {
        component: "x-app.nav-header",
        props: {
            text: "ACORDES",
            type: "header",
            permission: "chords.index",
        },
    },
    {
        component: "x-app.nav-item",
        props: {
            icon: "guitar",
            isActive:
                "{{ request()->is('acordes*') && !request()->is('acordes/create') && !request()->is('acordes/*/edit') ? 'active' : '' }}",
            text: "Ver Acordes",
            permission: "chords.index",
            uri: "http://127.0.0.1:8000/acordes",
        },
    },
    {
        component: "x-app.nav-item",
        props: {
            icon: "wrench",
            isActive: "{{ request()->is('acorde/crear*') ? 'active' : '' }}",
            text: "Crear Acordes",
            permission: "chords.create",
            uri: "http://127.0.0.1:8000/acorde/crear",
        },
    },
    {
        component: "x-app.nav-header",
        props: {
            text: "TUS ACORDES",
            type: "header",
            permission: "chords.edit",
        },
    },
    {
        component: "x-app.nav-item",
        props: {
            icon: "hammer",
            isActive:
                "{{ request()->is('acorde/edit') || request()->is('acordes/*/edit') || request()->is('acorde/*/edit') ? 'active' : '' }}",
            text: "Modificar Acordes",
            permission: "chords.edit",
            uri: "http://127.0.0.1:8000/acorde/edit",
        },
    },
    {
        component: "x-app.nav-item",
        props: {
            icon: "trash",
            isActive:
                "{{ request()->is('acorde/delete') || request()->is('acorde/*/delete') ? 'active' : '' }}",
            text: "Eliminar Acordes",
            permission: "chords.destroy",
            uri: "http://127.0.0.1:8000/acorde/delete",
        },
    },
    {
        component: "x-app.nav-header",
        props: {
            text: "Inventario",
            type: "header",
            permission: "items.index",
        },
    },
    {
        component: "x-app.nav-item",
        props: {
            text: "Gestionar Inventario",
            isActive: "{{ request()->is('inventario') }}",
            icon: "list",
            permission: "items.index",
            uri: "http://127.0.0.1:8000/inventario",
        },
    },
    {
        component: "x-app.nav-header",
        props: {
            text: "Ensayos",
            permission: "practice.index",
            type: "header",
        },
    },
    {
        component: "x-app.nav-item",
        props: {
            text: "Organizar un Ensayo",
            isActive: "{{ request()->is('ensayos') }}",
            icon: "microphone",
            permission: "practice.index",
            uri: "http://127.0.0.1:8000/ensayos",
        },
    },
    {
        component: "x-app.nav-item",
        props: {
            text: "Tus Ensayos",
            isActive: "{{ request()->is('ensayos/usuario') }}",
            icon: "list",
            permission: "practice.userIndex",
            uri: "http://127.0.0.1:8000/ensayos/usuario",
        },
    },
    {
        component: "x-app.nav-header",
        props: {
            text: "ADMIN",
            type: "header",
            permission: "admin.access",
        },
    },
    // {
    //     component: "x-app.nav-item",
    //     props: {
    //         text: "Respaldar BD",
    //         type: "db",
    //         isActive: "{{ request()->is('admin/publicaciones') }}",
    //         icon: "database",
    //         permission: "admin.usersIndex",
    //         uri: "http://127.0.0.1:8000/admin/publicaciones",
    //     },
    // },
    {
        component: "x-app.nav-item",
        props: {
            text: "Configuración",
            isActive: "{{ request()->is('configuracion') }}",
            icon: "wrench",
            permission: "admin.settings",
            uri: "http://127.0.0.1:8000/configuracion",
        },
    },
    {
        component: "x-app.nav-item",
        props: {
            text: "Logs",
            isActive: "{{ request()->is('logs') }}",
            icon: "bars",
            permission: "admin.logs",
            uri: "http://127.0.0.1:8000/logs",
        },
    },
    {
        component: "x-app.nav-item",
        props: {
            text: "Publicaciones",
            isActive: "{{ request()->is('admin/publicaciones') }}",
            icon: "archive",
            permission: "admin.posts",
            uri: "http://127.0.0.1:8000/admin/publicaciones",
        },
    },
    {
        component: "x-app.nav-item",
        props: {
            text: "Usuarios",
            isActive: "{{ request()->is('admin/usuarios') }}",
            icon: "user",
            permission: "admin.usersIndex",
            uri: "http://127.0.0.1:8000/admin/usuarios",
        },
    },
    {
        component: "x-app.nav-item",
        props: {
            text: "Géneros",
            isActive: "{{ request()->is('admin/generos') }}",
            icon: "archive",
            permission: "admin.genresIndex",
            uri: "http://127.0.0.1:8000/admin/generos",
        },
    },
    {
        component: "x-app.nav-item",
        props: {
            text: "Comentarios",
            isActive: "{{ request()->is('admin/comentarios') }}",
            icon: "comment",
            permission: "admin.commentsIndex",
            uri: "http://127.0.0.1:8000/admin/comentarios",
        },
    },
];

export default function Navbar() {
    const [search, setSearch] = useState("");
    const [permissions, setPermissions] = useState(null);
    const [width, setWidth] = useState(window.innerWidth);

    useEffect(() => {
        fetch("/api/permissions/user")
            .then((res) => res.json())
            .then((data) => {
                setPermissions(data.permissions);
            });
        const handleResize = () => setWidth(window.innerWidth);

        window.addEventListener("resize", handleResize);
        return () => {
            window.removeEventListener("resize", handleResize);
        };
    }, []);

    return (
        <nav>
            <a
                className="sidebar-brand d-flex align-items-center justify-content-center"
                href="/chordhub"
            >
                <div className="sidebar-brand-text mx-2">Chordhub</div>
                <div className="rotate-n-50">
                    <i className="fas fa-music"></i>
                </div>
            </a>
            {width >= 700 && (
                <div className="d-flex justify-content-center">
                    <input
                        className="form-control w-75 bg-primary-subtle"
                        type="text"
                        onChange={(e) => {
                            setSearch(e.target.value);
                        }}
                        placeholder="Buscar..."
                    />
                </div>
            )}
            <Divider />

            {search === ""
                ? routes
                      .filter((rout) => {
                          return (
                              permissions?.some(
                                  (per) => rout.props.permission == per.name
                              ) || rout.props.permission == null
                          );
                      })
                      .map((route, index) => (
                          <NavItem
                              permissions={permissions}
                              permission={route.props.permission}
                              key={index}
                              uri={route.props.uri}
                              type={route.props.type}
                              text={route.props.text}
                              icon={route.props.icon}
                          />
                      ))
                : routes
                      .filter((route) => {
                          return (
                              (route.props.text
                                  .toLowerCase()
                                  .includes(search.toLowerCase()) &&
                                  route.props.type != "header" &&
                                  permissions?.some(
                                      (per) =>
                                          per.name == route.props.permission
                                  )) ||
                              route.props.permission == null
                          );
                      })
                      .map((route, index) => (
                          <NavItem
                              permissions={permissions}
                              permission={route.props.permission}
                              key={index}
                              uri={route.props.uri}
                              type={route.props.type}
                              text={route.props.text}
                              icon={route.props.icon}
                          />
                      ))}
        </nav>
    );
}
