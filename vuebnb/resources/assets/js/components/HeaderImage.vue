<template>
  <div class="header">
    <div class="header-img" 
      :style="headerImageStyle"
      @click="$emit('header-clicked')">
      <listing-save :id="id" :button="true"></listing-save>
      <button class="view-photos">View Photos</button>
    </div>
  </div>
</template>

<script>
import ListingSave from './ListingSave'

  export default {
    props: ['image-url', 'id'],
    computed: {
      headerImageStyle () {
        return {
          'background-image': `url(${this.imageUrl})`
        }
      },
    },
    components: {
      ListingSave
    }
  }
</script>

<style>
  .header {
    height: 320px;
  }

  .header .header-img {
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-color: #f5f5f5;
    height: 100%;
    cursor: pointer;
    position: relative;
  }

  .header .header-img .view-photos {
    position: absolute;
    bottom: 20px;
    left: 20px;
  }
</style>
