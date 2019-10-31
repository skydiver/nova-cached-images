Nova.booting((Vue, router, store) => {
    Vue.component('index-nova-cached-images', require('./components/IndexField'))
    Vue.component('detail-nova-cached-images', require('./components/DetailField'))
    Vue.component('form-nova-cached-images', require('./components/FormField'))
})
