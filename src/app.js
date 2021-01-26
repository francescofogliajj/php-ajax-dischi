import Vue from 'vue';
const axios = require('axios').default;

var app = new Vue({

  el: "#root",
  data: {
    discs: [],
  },

  mounted: function() {

    axios
      .get("server.php")
      .then( result => {
        this.discs = result.data;
    });

  }

});
