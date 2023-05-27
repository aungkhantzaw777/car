import "./bootstrap";

import Alpine from "alpinejs";

Alpine.store("totalCount", {
    total: 0,

    update(num) {
        if (typeof num !== "number") {
            return;
        }
        this.total = num;
    },
});

window.Alpine = Alpine;

Alpine.start();
