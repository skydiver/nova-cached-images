export default {
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
    },
  },
};
