export default () => ({
    open: false,

    toggle() {
        if (this.open) {
            return this.close()
        }

        this.open = true
    },

    close(focusAfter) {
        this.open = false

        focusAfter && focusAfter.focus()
    },

    button: {
        ['x-on:click']() {
            this.toggle()
        },
        ['x-bind:aria-haspopup']() {
            return true
        },
        ['x-bind:aria-expanded']() {
            return this.open
        },
        ['x-bind:aria-controls']() {
            return this.$id('dropdown-button')
        },
    },

    panel: {
        ['x-bind:id']() {
            return this.$id('dropdown-button')
        },
        ['x-bind:style']() {
            return 'display:none;'
        },
        ['x-show']() {
            return this.open
        },
        ['x-on:click.outside']() {
            this.close(this.$refs.button)
        },
    },

    dropdown: {
        ['x-on:keydown.escape.prevent.stop']() {
            this.close(this.$refs.button)
        },
        ['x-on:focusin.window'] () {
            ! this.$refs.panel.contains(this.$event.target) && this.close()
        },
        ['x-bind:id']() {
            return this.$id('dropdown-button')
        },
    }
})
