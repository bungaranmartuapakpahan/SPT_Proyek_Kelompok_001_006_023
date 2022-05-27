<template>
<div>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Nama Ayah</th>
            <th scope="col">Nama Ibu</th>
            <th scope="col">Alamat Orangtua</th>
            <th scope="col">Pekerjaan ayah</th>
            <th scope="col">Penghasilan Ayah</th>
            <th scope="col">No.Hp Ayah</th>
            <th scope="col">Pekerjaan Ibu</th>
            <th scope="col">Penghasilan Ibu</th>
            <th scope="col">No.Hp Ibu</th>
            <th scope="col">Jumlah tanggungan</th>
            <th scope="col">Id Mahasiswa</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(val, index) in hasil" :key="index">
                
                <td>{{ val.id }}</td>
                <td>{{ val.nama_ayah }}</td>
                <td>{{ val.nama_ibu }}</td>
                <td>{{ val.alamat_orangtua }}</td>
                <td>{{ val.pekerjaan_ayah }}</td>
                <td>{{ val.penghasilan_ayah }}</td>
                <td>{{ val.no_hp_ayah }}</td>
                <td>{{ val.pekerjaan_ibu }}</td>
                <td>{{ val.penghasilan_ibu }}</td>
                <td>{{ val.no_hp_ibu}}</td>
                <td>{{ val.jumlah_tanggungan}}</td>
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
            axios.get(`http://127.0.0.1:8000/api/orangtua`)
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
