<template>
  <span :class="containerClass">
    <img :src="field.value" :alt="field.value" :style="styles" :class="imageClass" />
  </span>
</template>

<script>
export default {
  props: ['resourceName', 'field'],
  computed: {
    imageClass() {
      return this.field.class;
    },
    containerClass() {
      return this.field.containerClass;
    },
    styles() {
      let styles = '';

      if (this.field.width) {
        styles += `width: ${this.field.width};`;
      }

      if (this.field.height) {
        styles += `height: ${this.field.height};`;
      }

      if (this.field.radius) {
        styles += `border-radius: ${this.field.radius};`;
      }

      return styles;
    }
  }
}
</script>
