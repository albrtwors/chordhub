import { Async } from "./Async.js";

export class Notification {
    
    static readNotification(url, notificationCard) {
        const result = Async.get();
        notificationCard.remove();
    }
}
