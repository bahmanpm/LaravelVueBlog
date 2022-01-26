<template>
    <div>
        <div v-for="comment in comments" :key="comment.id" class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{ comment.name }}</h5>
                        <p class="card-text">
                            <small class="text-muted">{{
                                comment.created_at
                            }}</small>
                        </p>
                        <p class="card-text">
                            {{ comment.comment }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import CommentForm from "./CommentForm";

export default {
    components: {
        CommentForm,
    },
    props: {
        comments: Array,
    },
    mounted() {},
};
</script>
