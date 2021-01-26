import Vue from 'vue';
const axios = require('axios').default;

var app = new Vue({

  el: "#root",
  
  data: {
    discs: [],
    genre: ""
  },

  mounted: function() {

    axios
      .get("server.php")
      .then( result => {
        this.discs = result.data;
    });

  },

  methods: {

    filter: function() {

      axios
        .get("server.php",
          {
            params: {
              genre: this.genre
            }
          }
        )
        .then( result => {
          this.discs = result.data;
      });

    }

  }

});
