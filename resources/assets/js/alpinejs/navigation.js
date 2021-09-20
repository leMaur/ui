export default (menuList = null) => ({
    open: false,

    toggle() {
        this.open = ! this.open

        if (this.open && menuList) {
            this.$nextTick(() => this.$refs[menuList].querySelector('a:not([disabled])').focus())
        }
    },

    trigger: {
        ['@click']() {
            this.toggle()
        },
    },
})
