<template>
 <div>
  <gmap-map class="google-map"
    :center="center"
    :zoom="inzoom"
    >
    <gmap-marker
      :key="index"
      v-for="(m, index) in markers"
      :position="m.position"
      :clickable="true"
      :draggable="false"
      :icon="iconM"
      @click="showAlert(m, index)"
      ></gmap-marker>

  </gmap-map>
   
   <button class="button"  @click="getData">Here Press Me</button>

 </div>
</template>

<script>

 import MyImage from '../../../assets/img/icon8.png';
  
 	
 export default {
  	data () {
      return {
        iconM : MyImage,
        inzoom : 15,
        center: {lat: 10.0, lng: 10.0},
        markers: [{
          position: {lat: 10.0, lng: 10.0}
        }, {
          position: {lat: 11.0, lng: 11.0}
        }]
      }
    },
  	
  	mounted: function () { 
  		console.log('calling created hook ');
        this.geolocation();
    },
    
    methods: {
      showAlert(inMarker, i){
        
      	this.center = inMarker.position; 

      	let message = {
		    title: 'Marker Info ',
		    // body: 'Voter: ' + inMarker.name + ' I: ' +i,
		    body: `** Voter: ${ inMarker.name } I: ${ i+1 }`
		}


		 
		this.$dialog.confirm(message)


      },
      getData(){
         //get data from server to map
         console.log('******call getData ')
         axios.get('https://vuecanvass.localhost/api/getvoters').then((res) => {
         	        console.log('original markers ', this.markers);
                    var inMarkers = res.data;
                    console.log(inMarkers.data[0]);
                    this.center = inMarkers.data[0] ;
                    this.markers = inMarkers.data;
                    this.inzoom = 17;
                });

       },
       geolocation : function() {
        console.log('geolocation being called ')
	      navigator.geolocation.getCurrentPosition((position) => {
	        this.center = {
	          lat: position.coords.latitude,
	          lng: position.coords.longitude
	        };
	        console.log('calling geolocation function ', this.center);
	      });
	    }


    }
  }
</script>

<style>
  .google-map {
    width: 700px;
    height: 400px;
    margin: 0 auto;
    background: gray;
  }

 .button {
    display: inline-block;
    margin: -4px;
 }

</style>