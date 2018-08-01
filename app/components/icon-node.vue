<template>

  <div class="uk-form-row">
    <label class="uk-form-label">Icon-Name</label>
    <div class="uk-form-controls">
      <input type="text" v-model="node.data.theme.page_icon" />
    </div>
  </div>

</template>

<script>

  module.exports = {
    section:{

      label:"Icon",
      priority: 110
    },

    props:['node']

  }

  window.Site.components['icon-node'] = module.exports

</script>
