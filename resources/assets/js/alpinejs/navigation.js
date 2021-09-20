export default () => ({
    open: false,

    toggle() {
        this.open = ! this.open

        // if (menu) {
        //     this.$refs[menu].querySelector(':not([disabled])').focus()
        // }
    },

    trigger: {
        ['@click']() {
            this.toggle()
        },
    },
})
