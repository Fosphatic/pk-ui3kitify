<template>
  <div>
    <div style="background-color:#f6f6f6;padding:30px">
      <h3 class="uk-margin-remove">{{'Dropdown Menu Settings' | trans}}</h3>
      <span class="uk-text-small uk-display-block">{{'Does not work if it isn\'t a submenu' | trans}}</span>
      <hr />
      <div class="uk-form uk-form-horizontal">
        <div class="uk-form-row">
          <label class="uk-form-label">
            {{'Icon' | trans}}
            <span class="uk-text-small uk-display-block">{{'Would you like icon?' | trans}} <br /><a href="https://getuikit.com/docs/icon" target="_blank">{{'Press for all icon list' | trans}}</a></span>
          </label>
          <div class="uk-form-controls">
            <input type="text" class="uk-width-large" placeholder="pagekit" v-model="tm.data.theme.icon">
          </div>
        </div>
        <div class="uk-form-row">
          <label class="uk-form-label">
            {{'Subtitle' | trans}}
            <span class="uk-text-small uk-display-block">{{'Would you like text?' | trans}}</span>
          </label>
          <div class="uk-form-controls">
            <input type="text" class="uk-width-large" placeholder="I like pagekit. Because it's very light and easy" v-model="tm.data.theme.subtitle">
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
module.exports = {
  props: ['tm']
}
</script>
