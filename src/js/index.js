const { createApp } = Vue;

createApp({
  data() {
    return {
      albums: [],
      selectedAlbum: null,
    };
  },
  methods: {
    getAlbums() {
      axios.get("server.php").then((response) => {
        this.albums = response.data;
      });
    },
  },
  created() {
    this.getAlbums();
  },
}).mount("#app");
