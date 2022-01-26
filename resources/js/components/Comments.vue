<template>
    <div>
        <comment-form @get-comments="getComments()"></comment-form>
        <hr />
        <h3>Comments</h3>
        <comment-card :comments="comments"></comment-card>
    </div>
</template>

<script>
import CommentForm from "./CommentForm";
import CommentCard from "./CommentCard";

export default {
    components: {
        CommentForm,
        CommentCard,
    },
    data() {
        return {
            comments: [],
        };
    },
    methods: {
        async getComments() {
            this.$http
                .get("http://127.0.0.1:8001/api/comments")
                .then(function (response) {
                    console.log(response);
                    this.comments = response.body;
                });
        },
    },
    mounted() {
        this.getComments();
    },
};
</script>
