import Errors from './Errors';

class Form {
    /**
     * Create a new form instance
     * 
     * @param  {object} data 
     */
    constructor(data) {
        this.originalData = data;

        for(let field in data) {
            this[field] = data[field];
            this.errors = new Errors;
        }
        this.loading = false;
        this.sent = false;
    }

    /**
     * Fetch all relevant data for the form.
     */
    data() {
        let data = Object.assign({}, this);

        delete data.originalData;
        delete data.errors;

        return data;
    }

    /**
     * Reset the form fields.
     */
    reset() {
        for(let field in this.originalData) {
            this[field] = '';
        }
    }

    /**
     * Submit the form.
     * 
     * @param  {string} requestType 
     * @param  {string} url
     */
    submit(requestType, url) {
        axios[requestType](url, this.data())
            .then(this.onSuccess.bind(this))
            .catch(this.onFail.bind(this))
        this.loading = true;
    }

    /**
     * Handle a succesful form submission.
     * 
     * @param  {object} response 
     */
    onSuccess(response) {
        this.loading = false;
        flash("Your message has been sent! We'll get back to you shortly.");
        this.errors.clear();
        this.reset();
    }

    /**
     * Handle a failed form submission.
     * 
     * @param  {object} error 
     */
    onFail(error) {
        flash('Please make sure all the fields are filled out correctly.', 'danger');
        this.loading = false;
        this.errors.record(error.response.data.errors);
    }
}

export default Form;