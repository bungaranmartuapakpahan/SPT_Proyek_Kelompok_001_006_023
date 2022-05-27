<template>
<div>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">No Ijazah SMA</th>
            <th scope="col">Nama SMA</th>
            <th scope="col">Alamat SMA</th>
            <th scope="col">Kabupaten SMA</th>
            <th scope="col">Telepon SMA</th>
            <th scope="col">Kode Pos SMA</th>
            <th scope="col">Id Mahasiswa</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(val, index) in hasil" :key="index">
                
                <td>{{ val.id }}</td>
                <td>{{ val.no_ijazah_sma }}</td>
                <td>{{ val.nama_sma }}</td>
                <td>{{ val.alamat_sma }}</td>
                <td>{{ val.kabupaten_sma }}</td>
                <td>{{ val.telepon_sma }}</td>
                <td>{{ val.kode_pos_sma }}</td>
                <td>{{ val.id_mahasiswa}}</td>
               
            </tr>
        </tbody>
        </table>

       
</div>
</template>

<script>
import axios from 'axios'

export default({
    data(){
            return{
                hasil:[]
            }
    },
    mounted(){
        this.getData()
    },
    methods:{
        async getData(){
            axios.get(`http://127.0.0.1:8000/api/asalsekolah`)
            .then((res)=> {
                this.hasil = res.data.data
            })
            .catch((e)=> {
                console.log(e)
            });
        },
    }
        
})
</script>
<style>
table{width: 200%; font-size: 9px;}

</style>
