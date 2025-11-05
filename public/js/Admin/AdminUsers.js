import { Admin } from "../Classes/Admin.js";
import { LogValidation } from "../Classes/LogValidation.js";

const form = document.getElementById("adminUsersForm");
const url = form.getAttribute("action");
const val = new LogValidation(form, url);

val.putSubmitHandler();
