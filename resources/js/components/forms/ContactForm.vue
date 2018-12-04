<template>

<div class="card contact-form">
    <div class="card-content">
        <form method="POST" action="/contact" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
            <h1 v-if="form.loading">Sending...</h1>
            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input class="input" :class="{'is-danger': form.errors.has('name')}" id="name" name="name" type="text" placeholder="Your name here" v-model="form.name" required>
                    <span class="help is-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
                </div>
            </div>

            <div class="field">
                <label class="label">Email</label>
                <div class="control">
                    <input class="input" :class="{'is-danger': form.errors.has('email')}" type="email" id="email" name="email" placeholder="Your email here" value="" v-model="form.email" required>
                    <span class="help is-danger" v-if="form.errors.has('email')" v-text="form.errors.get('email')"></span>
                </div>
            </div>

            <div class="field">
                <label class="label">Message</label>
                <div class="control">
                    <textarea class="textarea" :class="{'is-danger': form.errors.has('message')}" id="message" name="message" placeholder="How can we help you?" v-model="form.message" required></textarea>
                    <span class="help is-danger" v-if="form.errors.has('message')" v-text="form.errors.get('message')"></span>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <button class="button is-primary">Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>


</template>

<script>
	export default {
		data() {
			return {
				form: new Form({
					name: '',
					email: '',
					message: '' 
				})
				
			}
		},
		methods: {
			onSubmit() {
				this.form.submit('post', '/contact');
			}
		}
	}
</script>