<template>
    <div>
        <form action="" @submit.prevent="createComment()">
            <div class="mb-3">
                <input
                    name="name"
                    type="text"
                    v-model="comment.name"
                    class="form-control"
                    placeholder="Name"
                />
            </div>
            <div class="mb-3">
                <textarea
                    name="body"
                    ref="textarea"
                    v-model="comment.body"
                    class="form-control"
                    placeholder="What is your view ..."
                    rows="3"
                ></textarea>
            </div>
            <div class="input-group">
                <button type="submit" class="btn btn-primary">
                    Add Comment
                </button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    data: function () {
        return {
            edit: false,
            comments: [],
            comment: {
                body: "",
                name: "",
            },
        };
    },
    methods: {
        createComment: function () {
            this.$http
                .post("http://127.0.0.1:8001/comment/store", this.comment)
                .then(function (response) {
                    console.log(response);
                    this.comment.body = "";
                    this.$emit("get-comments");
                });
        },
    },
};
</script>
