<template>
    <div>
        <comment-form></comment-form>
        <hr />
        <h3>Comments</h3>
        <comment-card></comment-card>
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
    mounted() {
        console.log("Component mounted.");
    },
};
</script>
