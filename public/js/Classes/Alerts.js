export { Alert };

class Alert {
    static SuccessAlert(message) {
        Swal.fire({
            customClass: {
                title: "dmsans",
                content: "dmsans",
            },
            title: `${message}`,
            icon: "success",
            confirmButtonText: "Aceptar",
        });
    }

    static ErrorAlert(message) {
        Swal.fire({
            customClass: {
                title: "dmsans",
                content: "dmsans",
            },
            title: `${message}`,
            icon: "error",
            confirmButtonText: "Aceptar",
        });
    }

    static LoadingAlert(message) {
        Swal.fire({
            customClass: {
                title: "dmsans",
                content: "dmsans",
            },
            title: `Espere mientras se procesa la solicitud`,
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading();
            },
        });
    }

    static async confirmDeleteAlert() {
        const result = await Swal.fire({
            title: "¿Estás seguro?",
            text: "¡No podrás revertir esto!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Sí, eliminarlo!",
            cancelButtonText: "Cancelar",
        });
        return result.isConfirmed;
    }
}
