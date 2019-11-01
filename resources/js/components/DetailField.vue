<template>
  <panel-item :field="field">
    <template slot="value">
      <img
        v-if="field.value"
        :src="field.value"
        :alt="field.value"
        :style="styles"
        :class="imageClass"
      />
    </template>
  </panel-item>
</template>

<script>
import fieldMixin from "../fieldMixin";
export default {
  props: ["resource", "resourceName", "resourceId", "field"],
  mixins: [fieldMixin]
};
</script>
