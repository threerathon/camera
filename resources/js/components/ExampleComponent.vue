<template>
    <div class="container">
        <div class="table-responsive">

        <table class="table table-bordered">
            <thead>
                <tr>
                <th>#</th>
                <th>Action Type</th>
                <th>aliasID</th>
                <th>Data Type</th>
                <th>Date</th>
                <th>Image</th>
                <th>Device ID</th>
                <th>Device Name</th>
                <th>Hash</th>
                <th>Id</th>
                <th>Key Code</th>
                <th>PersonID</th>
                <th>Person Name</th>
                <th>Person Title</th>
                <th>Person Type</th>
                <th>Place ID</th>
                <th>Place Name</th>
                <th>Mask</th>
                <th>Time</th>
                <th><a name="" id=""  class="btn btn-danger mt-2 mb-2" href="" role="button">Xóa hết</a></th>
                </tr>
            </thead>
            <tbody id="data">
                <tr v-for="(listCheckin,index) in CheckinData" :key="listCheckin.id">
                    <td>1</td>
                    <td>{{listCheckin.action_type}}</td>
                    <td>{{listCheckin.aliasID}}</td>
                    <td>{{listCheckin.data_type}}</td>
                    <td>{{listCheckin.date}}</td>
                    <td>{{listCheckin.detected_image_url}}</td>
                    <td>{{listCheckin.deviceID}}</td>
                    <td>{{listCheckin.deviceName}}</td>
                    <td>{{listCheckin.hash}}</td>
                    <td>{{listCheckin.id}}</td>
                    <td>{{listCheckin.keycode}}</td>
                    <td>{{listCheckin.personID}}</td>
                    <td>{{listCheckin.personName}}</td>
                    <td>{{listCheckin.personTitle}}</td>
                    <td>{{listCheckin.personType}}</td>
                    <td>{{listCheckin.placeID}}</td>
                    <td>{{listCheckin.placeName}}</td>
                    <td>{{listCheckin.mask}}</td>
                    <td>{{listCheckin.time}}</td>
                    <td><button name="" id="" @click="deleteCheckinData(listCheckin,index)" class="btn btn-danger mt-2 mb-2" href="" role="button">Xóa</button></td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                CheckinData: {
                    personID: '',
                    personName: '',
                }
            }
        },
        created() {
           this.getCheckinData()
       },
        methods: {
            async getCheckinData() {
               try {
                   const response = await axios.get('https://bensrest.o2r2.io/api/')
                   this.CheckinData = response.data;
                   console.log(this.CheckinData);
               } catch (error) {
                   this.error = error.response.CheckinData
               }
            },
            async deleteCheckinData(listCheckin, index) {
                try {
                    await axios.delete('https://bensrest.o2r2.io/api/' + listCheckin.ids)
                    this.CheckinData.splice(index, 1)
                } catch (error) {
                    this.error = error.response.data
                }
            }
        }
    }
</script>
