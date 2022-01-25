<template>
    <div>
        <div v-for="comment in comments" :key="comment.id" class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-1">
                    <!-- <img src="..." class="card-img" alt="..."> -->
                </div>
                <div class="col-md-11">
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
                        <div class="col-md-1 offset-md-11">
                            <a href="#" class="btn btn-primary">Reply</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        comments: Array,
        replies: Array,
    },
    mounted() {},
};
</script>
