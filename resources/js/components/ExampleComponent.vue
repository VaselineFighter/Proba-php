<template>
</template>

<script>
    export default {
  name: 'App',
  data: function() {
    return {
      connection: null
    }
  },
  created: function() {
    console.log("Starting connection to WebSocket Server")
    this.connection = new WebSocket("ws://10.3.65.40:8080")

    this.connection.onmessage = function(event) {
      let bloked =JSON.parse(event['data']);
      
      console.log(event['data']);
      bloked.forEach(element =>{
          
          var disable = document.getElementById(element).disabled = true;
          console.log(disable);
      });
              
    }

    this.connection.onopen = function(event) {
      console.log("Successfully connected to the echo websocket server...")
    }

  }
}
</script>
