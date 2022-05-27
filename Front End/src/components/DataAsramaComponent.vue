<template>
<div>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Nama Asrama</th>
            <th scope="col">Kamar</th>
            <th scope="col">Pengurus Asrama</th>
            <th scope="col">Nilai Asrama</th>
            <th scope="col">Id Mahasiswa</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(val, index) in hasil" :key="index">
                
                <td>{{ val.id }}</td>
                <td>{{ val.nama_asrama }}</td>
                <td>{{ val.kamar }}</td>
                <td>{{ val.pengurus_asrama }}</td>
                <td>{{ val.nilai_asrama }}</td>
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
            axios.get(`http://127.0.0.1:8000/api/asrama`)
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
