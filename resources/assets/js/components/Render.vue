<script>
    export default {
        /* render(createElement) {
            return createElement('h1', 'Hello World');
        } */

        /* render(h) {
            return h('h1', 'Hello World');
        } */

        // h refers to hyperscript
       /*  render:h => h('h1', 'Hello World') */

       data() {
           return {
               name: 'John Doe'
           }
       },

       render(element) {
            // nest structure
            return element('div', { attrs: { id: 'foobar'}}, [
                element('h1', { class: 'title' },  this.name),
                element('h2', { class: 'subtitle' },  this.name)
            ]);


            // api just like v-bind :class, so we can add an array here ['one','two']
            /* return element('h1', { class: 'title' }, this.name); */
        }


    }
</script>