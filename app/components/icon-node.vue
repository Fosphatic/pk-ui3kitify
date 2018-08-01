<template>

  <div class="uk-form-row">
    <label class="uk-form-label uk-margin-medium-bottom">UIKit-Icon-Name (Attention: only the name of the icon without uk-icon prefix!)</label>
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
