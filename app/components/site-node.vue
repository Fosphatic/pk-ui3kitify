<template lang="html">
  <div>
    <v-menu    :tm="node"></v-menu>
    <v-section :tm="node"></v-section>
  </div>
</template>

<script>
  module.exports = {
    props: ['config' , 'node' , 'data'],
    section: {
      label:'Theme',
      priority:90
    },
    components:{
      vSection: require('../components/config/node-section.vue'),
      vMenu: require('../components/config/node-menu.vue')
    }
  }
  window.Site.components['site-node'] = module.exports;
</script>
