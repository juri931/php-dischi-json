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
    addNewAlbum() {
      const data = new FormData();
      data.append("newAlbumTitle", this.newAlbum.title);
      data.append("newAlbumAuthor", this.newAlbum.author);
      data.append("newAlbumYear", this.newAlbum.year);
      data.append("newAlbumPoster", this.newAlbum.poster);
      data.append("newAlbumGenre", this.newAlbum.genre);
      data.append("newAlbumLogo", this.newAlbum.logo);
      data.append("newAlbumDesc", this.newAlbum.desc);

      axios.post(this.apiUrl, data).then((result) => {
        this.list = result.data;
      });
    },
  },
  mounted() {
    this.getApi();
  },
}).mount("#app");
