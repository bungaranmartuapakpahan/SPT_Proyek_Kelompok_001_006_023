<template>
<div>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Status</th>
            <th scope="col">Angkatan</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Program Studi</th>
            <th scope="col">Kelas</th>
            <th scope="col">Wali Mahasiswa</th>
            <th scope="col">Jalur USM</th>
            <th scope="col">NIM</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(val, index) in hasil" :key="index">
                
                <td>{{ val.id }}</td>
                <td>{{ val.status_akhir }}</td>
                <td>{{ val.angkatan }}</td>
                <td>{{ val.user_name }}</td>
                <td>{{ val.email }}</td>
                <td>{{ val.program_studi }}</td>
                <td>{{ val.kelas }}</td>
                <td>{{ val.wali_mahasiswa }}</td>
                <td>{{ val.jalur_usm }}</td>
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
            axios.get(`http://127.0.0.1:8000/api/akademis`)
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
table{width: 200%; font-size: 12px;}

</style>
