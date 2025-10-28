document.addEventListener("alpine:init", () => {

    Alpine.store("navbar", {
        open: false,
        isMobile: false,

        toggleMenu() {
            this.open = !this.open;
        },

        changeMenuInert() {
            return this.isMobile && !this.open ? true : false;
        }
    
    });

});
