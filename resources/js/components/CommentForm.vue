<template>
    <div>
        <div class="mb-3">
            <input
                type="email"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="Name"
            />
        </div>
        <div class="mb-3">
            <textarea
                class="form-control"
                placeholder="What is your view ..."
                id="exampleFormControlTextarea1"
                rows="3"
            ></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-3">Comment</button>
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
