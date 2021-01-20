<template>
    <div class="card shadow frame">
        <div class="card-body">
            <span class="icon rounded">
                <slot name="icon"></slot>
            </span>
            <h5 class="card-title">
                <slot name="heading"></slot>
            </h5>
            <p class="card-text">
                <slot name="body"></slot>
            </p>
        </div>
    </div>
</template>

<script>
export default {
    name: "HomeCard"
}
</script>

<style scoped lang="scss">
.frame {

    .icon {
        display: block;
        background: #00427b;
        width: 50px;
        height: 50px;
        margin: 0 auto 16px;
        color: #FFFFFF;

        i {
            line-height: 50px;
            font-size: 35px;
        }
    }

}
</style>
