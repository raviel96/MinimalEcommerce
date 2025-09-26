document.addEventListener("alpine:init", () => {
    Alpine.store("navbar", {
        open: false,

        toggle() {
            this.open = !this.open;
        },
    });
});
