const { createApp } = Vue;

createApp({
  data() {
    return {
      albums: [
        {
          cover:
            "https://albumartexchange.com/coverart/gallery/me/metallica_masterofpuppets_457a.jpg",
          title: "Master of Puppets",
          artist: "Metallica",
          year: 1986,
        },
        {
          cover:
            "https://albumartexchange.com/coverart/gallery/ac/acdc_backinblack_4rb.jpg",
          title: "Back in Black",
          artist: "AC/DC",
          year: 1980,
        },
        {
          cover:
            "https://albumartexchange.com/coverart/gallery/ir/ironmaiden_thenumberofthebeast_dkw3.jpg",
          title: "The Number of the Beast",
          artist: "Iron Maiden",
          year: 1982,
        },
        {
          cover:
            "https://albumartexchange.com/coverart/gallery/bl/blacksabbath_paranoid_6cw.jpg",
          title: "Paranoid",
          artist: "Black Sabbath",
          year: 1970,
        },
        {
          cover:
            "https://albumartexchange.com/coverart/gallery/gu/gunsnroses_appetitefordestructi_bh3.jpg",
          title: "Appetite for Destruction",
          artist: "Guns N' Roses",
          year: 1987,
        },
        {
          cover:
            "https://albumartexchange.com/coverart/gallery/me/megadeth_rustinpeace_nit.jpg",
          title: "Rust in Peace",
          artist: "Megadeth",
          year: 1990,
        },
      ],
    };
  },
  methods: {
    getAlbums() {
      axios.get("server.php").then((response) => {
        console.log(response);
      });
    },
  },
  created() {
    this.getAlbums();
  },
}).mount("#app");
