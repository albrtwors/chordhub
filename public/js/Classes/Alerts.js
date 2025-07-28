export { Alert };

class Alert {
    static SuccessAlert(message) {
        Swal.fire({
            title: `${message}`,
            icon: "success",
            confirmButtonText: "Aceptar",
            customClass: {
                title: "dmsans",
                content: "dmsans",
            },
        });
    }

    static ErrorAlert(message) {
        Swal.fire({
            title: `${message}`,
            icon: "error",
            confirmButtonText: "Aceptar",
            customClass: {
                title: "dmsans",
                content: "dmsans",
            },
        });
    }

    static LoadingAlert(message) {
        Swal.fire({
            title: `Espere mientras se procesa la solicitud`,
            allowOutsideClick: false,
            customClass: {
                title: "dmsans",
                content: "dmsans",
            },
            didOpen: () => {
                Swal.showLoading();
            },
        });
    }
}
