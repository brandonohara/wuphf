<template>
    <div class="wuphf col-xs-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
        <div class="metadata">
            <div class="avatar">
                <img src="" class="img-thumbnail" />
            </div>
            <div class="author">
                {{ wuphf.author.first + ' ' + wuphf.author.last }} <a :href="'/users/' + wuphf.author.handle">@{{ wuphf.author.handle }}</a>
            </div>
            <div class="date hidden-xs hidde-sm">
                {{ wuphf.relative_date }}
            </div>
            <div class="actions">
                x
            </div>
        </div>
        <div class="text">
            <p>{{ wuphf.text }}</p>
        </div>
        <div class="media">
            <img :src="wuphf.url" :alt="wuphf.text" class="img-fluid" />
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            'wuphf': {
                type: Object,
                required: true
            }
        }
    }
</script>
