const { createApp } = Vue;

createApp({
  data() {
    return {
      apiUrl: "server.php",
      list: [],
      newAlbum: {
        title: "",
        author: "",
        year: "",
        poster: "",
        genre: "",
        logo: "",
        desc: "",
      },
    };
  },
  methods: {
    getApi() {
      axios.get(this.apiUrl).then((result) => {
        this.list = result.data;
      });
    },
  },
  mounted() {
    this.getApi();
  },
}).mount("#app");
