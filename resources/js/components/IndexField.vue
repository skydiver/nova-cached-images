<template>
  <span :class="containerClass">
    <img
      v-if="field.value"
      :src="field.value"
      :alt="field.value"
      :style="styles"
      :class="imageClass"
    />
  </span>
</template>

<script>
import fieldMixin from '../fieldMixin';
export default {
  props: ['resourceName', 'field'],
  mixins: [fieldMixin],
}
</script>
