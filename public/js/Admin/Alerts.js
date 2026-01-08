import { Alert } from "../Classes/Alerts.js";

Livewire.on("alert", (message) => {
    $("#exampleModalCenter").modal("hide");
    Alert.SuccessAlert(message);
});

Livewire.on("alertError", (message) => {
    $("#exampleModalCenter").modal("hide");
    Alert.ErrorAlert(message);
});

Livewire.on("alertDBRestored", (message) => {
    $("#exampleModalCenter").modal("hide");
    Alert.SuccessAlert(message);
});
