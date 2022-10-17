<template>
    <div class="flex h-[10%]" >
        <img 
            class="h-12  m-auto cursor-pointer grayscale brightness-[200]"
            @click="navigate('dashboard')"
            src="https://bangr.s3.amazonaws.com/bangr+logo+-+transparent.png"
            alt="bangr logo"
        >
    </div>
    <div class="flex flex-col h-[80%]">
        <div :class="classes.container" @click="navigate('dashboard')">
            <el-icon size="30px">
                <House />
            </el-icon>
            <div>
                Home
            </div>
        </div>
        <div :class="classes.container" @click="navigate('contacts')">
            <el-icon size="30px">
                <User />
            </el-icon>
            <div>
                Contacts
            </div>
        </div>
        <div :class="classes.container" @click="navigate('messages')">
            <el-icon size="30px">
                <MessageBox />
            </el-icon>
            <div>
                Messages
            </div>
        </div>
        <div :class="classes.container" @click="navigate('events')">
            <el-icon size="30px">
                <Calendar />
            </el-icon>
            <div>
                Schedule
            </div>
        </div>
        <div :class="classes.container" @click="navigate('reports')">
            <el-icon size="30px">
                <DataLine />
            </el-icon>
            <div>
                Reports
            </div>
        </div>
        <div :class="classes.container">
            <el-badge :value="12" class="m-auto">
                <el-icon size="30px" class="cursor-pointer m-auto"><Bell /></el-icon>
            </el-badge>
            <div>
                Notifications
            </div>
        </div>
        
    </div>
    <div class="flex h-[10%]">
        <el-avatar src="https://cube.elemecdn.com/3/7c/3ea6beec64369c2642b92c6726f1epng.png" class="cursor-pointer m-auto"/>
    </div>
</template>

<script>
import { Inertia } from '@inertiajs/inertia'

export default {
    methods: {
        navigate(endpoint) {
            Inertia.get('/' + endpoint);
        },
        renderList(item) {
            console.log(test)
        }
    },
	data() {
		return {
            classes: {
                container: 'w-full py-4 cursor-pointer text-center text-white hover:bg-[#94A3B8]'
            },
			items: [
                {
                    icon: '<shop></shop>',
                    name: 'Company'
                },
                {
                    icon: '',
                    name: 'Schedule'
                },
                {
                    icon: '',
                    name: 'Reports'
                },
            ],
		}
	},
}
</script>