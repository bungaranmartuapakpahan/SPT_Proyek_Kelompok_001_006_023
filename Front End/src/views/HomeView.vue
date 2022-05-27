<template>
  <div>
    <div class="container">

      <div class="row justify-content-center">
        <div class="col-3 left-bar pt-4 pb-4 full-body">
          <div class="mb-4 d-flex justify-content-center">DATA MAHASISWA</div>
          <div class="mb-4">
            <button @click="show(1)" type="button" class="btn btn-data btn-outline-success">Data Akademis</button>
          </div>
          <div class="mb-4">
            <button @click="show(2)" type="button" class="btn btn-data btn-outline-success">Data Orang Tua</button>
          </div>
          <div class="mb-4">
            <button @click="show(3)" type="button" class="btn btn-data btn-outline-success">Data Sekolah</button>
          </div>
          <div class="mb-4">
            <button @click="show(4)" type="button" class="btn btn-data btn-outline-success">Data Asrama</button>
          </div>
        </div>

        <div class="col-9 right-bar full-body">
          <div class="title text-center">

             
            <div v-if="showData == 1">
              <h2>Data Akademis</h2>
              <DataAkademisComponent/>
            </div>

            <div v-if="showData == 2">
              <h2>Data Orang Tua</h2>
              <DataOrangTuaComponent/>
            </div>

            <div v-if="showData == 3">
              <h2>Data Sekolah</h2>
              <DataAsalSekolahComponent/>
            </div>

            <div v-if="showData == 4">
              <h2>Data Asrama</h2>
              <DataAsramaComponent/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import DataAkademisComponent from '../components/DataAkademisComponent.vue'
import DataOrangTuaComponent from '../components/DataOrangTuaComponent.vue'
import DataAsalSekolahComponent from '../components/DataAsalSekolahComponent.vue'
import DataAsramaComponent from '../components/DataAsramaComponent.vue'


export default({
  data() {
    return {
      showData: 1,
    }
  },
  components: {
    DataAkademisComponent,DataOrangTuaComponent,DataAsalSekolahComponent,DataAsramaComponent
  },
  methods: {
    show(id){
      this.showData = id
    }
  }
})
</script>

<style scoped>

.full-body
{
  min-height: 100vh;
}
.btn-data
{
  width: 100%;
}

.left-bar
{
  background-color: rgb(14, 124, 87);
}

.right-bar
{
  border: 1px solid grey;
}
</style>
