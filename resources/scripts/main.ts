import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { resolvePageComponent } from 'vite-plugin-laravel/inertia'
import ElementPlus from 'element-plus'
import 'element-plus/dist/index.css'
import * as ElementPlusIconsVue from '@element-plus/icons-vue'

createInertiaApp({
	resolve: (name) => resolvePageComponent(name, import.meta.glob('../views/pages/**/*.vue')),
	setup({ el, app, props, plugin }) {
		const test = createApp({ render: () => h(app, props) })
			.use(plugin)
			.use(ElementPlus)

		for (const [key, component] of Object.entries(ElementPlusIconsVue)) {
			test.component(key, component)
		}
		test.mount(el)
	},
})
