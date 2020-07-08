<template>
    <div class="feedback">
        <!--Section Header START-->
        <h2>Atsiliepimai</h2>
        <!--Section Header END-->

        <!--Comments Table START-->
        <table>

            <!--Table Headings START-->
            <thead>
            <tr>
                <th>Vardas</th>
                <th>Komentaras</th>
                <th>Data</th>
            </tr>
            </thead>
            <!--Table Headings END-->

            <!--Table Body START-->
            <tbody>

            <!--Table Row START-->
            <tr v-for="feedback in newFeedbacks">
                <td><h4>{{ feedback.name }}</h4></td>
                <td>{{ feedback.comment }}</td>
                <td>
                    <small>{{ formatDate(feedback.created_at) }}</small>
                </td>
            </tr>
            <!--Table Row END-->

            </tbody>
            <!--Table Body END-->

        </table>
        <!--Comments Table END-->

        <div class="comment-form">

            <!--Comment Form START-->
            <form v-if="user" v-on:submit.prevent="sendData">
                <div class="form-group">
                    <label for="comment">Komentaras 555</label>

                    <!--Textarea START-->
                    <textarea v-model="comment"
                              id="comment"
                              name="comment"
                              rows="7"
                              cols="50"></textarea>
                    <!--Textarea END-->

                    <small class="error">{{ error }}</small>
                </div>
                <div class="form-group">

                    <!--Submit Button START-->
                    <button type="submit" v-bind:disabled="disabled">Siųsti</button>
                    <!--Submit Button END-->

                </div>
            </form>
            <!--Comment Form END-->

            <!--Comment Info START-->
            <p v-else>Norite parašyti komentarą? <a href="/register">Užsiregistruokite</a></p>
            <!--Comment Info END-->

        </div>
    </div>
</template>

<script>
    export default {
        props: ['feedbacks', 'user'],
        data: function () {
            return {
                csrf: document.head.querySelector("[name~=csrf-token][content]").content,
                path: window.location,
                comment: '',
                error: '',
                disabled: false,
                newFeedbacks: this.feedbacks
            }
        },
        watch: {
            comment: function () {
                if (this.comment.trim().length <= 0) {
                    this.error = '';
                    this.disabled = true;
                } else if (this.comment.trim().length >= 500) {
                    this.error = 'Komentaras negali viršyti 500 simbolių.';
                    this.disabled = true;
                } else {
                    this.error = '';
                    this.disabled = false;
                }
            },
        },
        methods: {
            sendData: function () {
                fetch(`${this.path}/send`, {
                    method: 'post',
                    body: JSON.stringify({comment: this.comment.trim()}),
                    headers: {
                        'Content-Type': 'application/json',
                        "X-CSRF-Token": this.csrf
                    }
                })
                    .then(response => {
                        return response.text();
                    })
                    .then(data => {
                        const message = JSON.parse(data);
                        if (message.fail) {
                            this.error = message.fail.comment[0].charAt(0).toUpperCase() + message.fail.comment[0].slice(1);
                        } else {
                            this.feedbacks.push(message.success);
                            console.log(message.success);
                        }
                    })
                    .catch((error) => {
                        this.error = error;
                    });
            },
            formatDate: function (date) {
                const newDate = new Date(Date.parse(date));

                return newDate.toLocaleString('lt-LT');
            }
        },
    }
</script>