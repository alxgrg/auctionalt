<template>
    <transition name="custom-classes-transition"
        enter-active-class="animated fadeIn"
        leave-active-class="animated fadeOut"
    >
    <div class="notification alert-flash" 
        :class="'is-'+level"
        role="alert"
        v-show="show"
        v-text="body">
    </div>
</transition>
</template>

<script>
    export default {
        props: ['message'],
        data() {
            return {
                body: this.message,
                level: 'success',
                show: false
            }
        },
        created() {
            if (this.message) {
                this.flash();
            }
            window.events.$on(
                'flash', data => this.flash(data)
            );
        },
        methods: {
            flash(data) {
                if (data) {
                    this.body = data.message;
                    this.level = data.level;
                }
                this.show = true;
                this.hide();
            },
            hide() {
                setTimeout(() => {
                    this.show = false;
                }, 4000);
            }
        }
    };
</script>

<style>
    .alert-flash {
        position: fixed;
        right: 5%;
        top: 25px;
        max-width:90%;
        z-index: 9999;
    }
</style>