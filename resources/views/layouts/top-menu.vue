<template>
    <div class="flex-none w-[10%]" >
        <img 
            class="h-12  m-auto cursor-pointer"
            @click="navigate('dashboard')"
            src="https://bangr.s3.amazonaws.com/bangr+logo+-+transparent.png"
            alt="bangr logo"
        >
    </div>
    <div class="grow"></div>
    <div class="flex w-[10%]">
        <el-badge :value="12" class="m-auto">
            <el-icon :size="30" class="cursor-pointer m-auto"><Bell /></el-icon>
        </el-badge>
    </div>

    <div class="flex w-[10%]">
        <el-avatar src="https://cube.elemecdn.com/3/7c/3ea6beec64369c2642b92c6726f1epng.png" class="cursor-pointer m-auto"/>
    </div>
</template>
<script>
import { Inertia } from '@inertiajs/inertia'

export default {
    methods: {
        navigate(endpoint) {
            Inertia.get('/' + endpoint);
        }
    },
}
</script>