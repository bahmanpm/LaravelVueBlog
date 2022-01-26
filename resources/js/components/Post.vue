<template>
    <div class="container">
        <h1>Blog Post Title!</h1>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi
            facere vero culpa error temporibus delectus quae earum obcaecati,
            facilis cum cumque magnam, odio reiciendis atque repellat
            recusandae! Fuga, dolores veritatis! Laboriosam qui recusandae animi
            obcaecati delectus libero. Veniam necessitatibus explicabo placeat
            voluptates. Praesentium cumque enim totam labore quod? Recusandae ut
            est provident, adipisci totam suscipit sit nesciunt natus laboriosam
            animi.
        </p>
        <figure>
            <blockquote class="blockquote">
                <p>A well-known quote, contained in a blockquote element.</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                Someone famous in <cite title="Source Title">Source Title</cite>
            </figcaption>
        </figure>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis
            rem accusamus necessitatibus eligendi, aliquam odio. Modi deleniti
            aliquam a recusandae velit, repudiandae veniam soluta. Accusamus
            unde mollitia incidunt corporis illo!
        </p>
        <Comments></Comments>
    </div>
</template>

<script>
import Comments from "./Comments";

export default {
    components: {
        Comments,
    },
    mounted() {},
};
</script>
