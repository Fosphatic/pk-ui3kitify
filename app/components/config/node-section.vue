<template>
  <div>
    <div style="background-color:#f6f6f6;padding:30px">
      <h3>{{'Section Settings' | trans}}</h3>
      <hr />
      <div class="uk-form uk-form-horizontal">
        <div class="uk-form-row">
            <label class="uk-form-label" for="hideTitle">
              {{'Title Hide' | trans}}
              <span class="uk-text-small uk-display-block">{{'Hide headline' | trans}}</span>
            </label>
            <div class="uk-form-controls"><input id="hideTitle" type="checkbox" v-model="tm.theme.title"> <code>{{tm.theme.title}}</code></div>
        </div>
        <div class="uk-form-row">
            <label class="uk-form-label" for="hideTitle">
              {{'Content Hide' | trans}}
              <span class="uk-text-small uk-display-block">{{'Hide Content' | trans}}</span>
            </label>
            <div class="uk-form-controls"><input id="hideTitle" type="checkbox" v-model="tm.theme.content"> <code>{{tm.theme.content}}</code></div>
        </div>
        <div class="uk-form-row">
          <label class="uk-form-label">
            {{'Style' | trans}}
            <span class="uk-text-small uk-display-block">{{'Should you choose section color' | trans}}</span>
          </label>
          <div class="uk-form-controls">
            <select class="uk-width-large" v-model="tm.theme.section.section">
              <option value="uk-section uk-section-default">.uk-section-default</option>
              <option value="uk-section uk-section-muted">.uk-section-muted</option>
              <option value="uk-section uk-section-primary">.uk-section-primary</option>
              <option value="uk-section uk-section-secondary">.uk-section-secondary</option>
            </select>
          </div>
        </div>
        <div class="uk-form-row">
          <label class="uk-form-label">
            {{'Size' | trans}}
            <span class="uk-text-small uk-display-block">{{'Would you like size' | trans}}</span>
          </label>
          <div class="uk-form-controls">
            <select class="uk-width-large"  v-model="tm.theme.section.size">
              <option value="">Default</option>
              <option value="uk-section-xsmall">.uk-section-xsmall</option>
              <option value="uk-section-small">.uk-section-small</option>
              <option value="uk-section-large">.uk-section-large</option>
              <option value="uk-section-xlarge">.uk-section-xlarge</option>
              <option value="uk-section-remove-vertical">.uk-section-remove-vertical</option>
            </select>
          </div>
        </div>
        <div class="uk-form-row">
          <label class="uk-form-label">
            {{'Preserve' | trans}}
            <span class="uk-text-small uk-display-block">{{'Dark background gives whiteness' | trans}}</span>
          </label>
          <div class="uk-form-controls">
              <select class="uk-width-large" v-model="tm.theme.section.preserve">
              <option value="">Not preserve</option>
              <option value="uk-preserve-color">.uk-preserve-color</option>
            </select>
          </div>
        </div>
        <div class="uk-form-row">
          <label class="uk-form-label">
            {{'Container' | trans}}
            <span class="uk-text-small uk-display-block">{{'Would you like container' | trans}}</span>
          </label>
          <div class="uk-form-controls">
              <select class="uk-width-large" v-model="tm.theme.section.container">
              <option value="">Not container</option>
              <option value="uk-container">.uk-container</option>
              <option value="uk-container-large">.uk-container-large</option>
              <option value="uk-container-small">.uk-container-small</option>
            </select>
          </div>
        </div>
        <div class="uk-form-row">
          <label class="uk-form-label">
            {{'HTML Class' | trans}}
            <span class="uk-text-small uk-display-block">{{'You can add css classes' | trans}}</span>
          </label>
          <div class="uk-form-controls">
            <input class="uk-width-large" placeholder="tm-text-color tm-padding" v-model="tm.theme.section.class">
          </div>
        </div>
        <div class="uk-form-row">
          <label class="uk-form-label">
            {{'HTML Id' | trans}}
            <span class="uk-text-small uk-display-block">{{'You can add id classes' | trans}}</span>
          </label>
          <div class="uk-form-controls">
            <input class="uk-width-large" placeholder="tmTextColor" v-model="tm.theme.section.id">
          </div>
        </div>
        <div class="uk-form-row">
          <label class="uk-form-label">
            {{'HTML Style' | trans}}
            <span class="uk-text-small uk-display-block">{{'You can write css style' | trans}}</span>
          </label>
          <div class="uk-form-controls">
            <textarea class="uk-width-large" placeholder=".tm-text-color{color:#black;}" v-model="tm.theme.section.style"></textarea>
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
