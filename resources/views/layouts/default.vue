
<template>
	<el-container class="h-screen">
		<div class="w-[10%] bg-[#334155]">
			<SideMenu></SideMenu>
		</div>
		<el-container>
		<el-main>
			<slot />
		</el-main>
		</el-container>
	</el-container>
	<!-- <el-container class="h-screen pt-1">
		<el-header class="bg-slate-100 flex">
			<TopMenu></TopMenu>
		</el-header>
		<el-container class="h-full">
			<el-aside class="bg-slate-100 ">
				<SideMenu></SideMenu>
			</el-aside>
			<el-main>
				<slot />
			</el-main>
		</el-container>
	</el-container> -->
</template>

<script setup lang="ts">
import TopMenu from "./top-menu.vue";
import TopMenu1 from "./top-menu.vue";
import SideMenu from "./side-menu.vue";

</script>
