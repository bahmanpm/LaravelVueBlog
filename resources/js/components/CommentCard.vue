<template>
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-1">
                <!-- <img src="..." class="card-img" alt="..."> -->
            </div>
            <div class="col-md-11">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                        <small class="text-muted"
                            >Last updated 3 mins ago</small
                        >
                    </p>
                    <p class="card-text">
                        This is a wider card with supporting text below as a
                        natural lead-in to additional content. This content is a
                        little bit longer.
                    </p>
                    <div class="col-md-1 offset-md-11">
                        <a href="#" class="btn btn-primary">Reply</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    },
};
</script>
