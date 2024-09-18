
function card() {
  return {
    jurusan: [
      {
        gambar: 'assets/img/jursan/tkj.jpg',
        judul: 'Teknik Komputer & Jaringan',
        text: 'Program keahlian ini membekali siswa dengan kemampuan dalam perakitan komputer, jaringan, dan keamanan data. Lulusan siap bekerja di berbagai industri teknologi.'
      },
      {
        gambar: 'assets/img/jursan/mm.jpg',
        judul: 'Multimedia',
        text: 'Jurusan Multimedia dengan keterampilan desain grafis, animasi, editing video, dan pengembangan konten digital. Lulusan siap berkarya di industri kreatif dan media.'
      },
      {
        gambar: 'assets/img/jursan/rpl.jpg',
        judul: 'Rekayasa Perangkat Lunak',
        text: 'Jurusan ini tentang pengembangan aplikasi, pemrograman, dan sistem perangkat lunak. Lulusan akan mampu merancang, membangun, dan memelihara perangkat lunak.'
      },
      {
        gambar: 'assets/img/jursan/mb.jpg',
        judul: 'Manajemen Bisnis',
        text: 'Jurusan Manajemen Bisnis keterampilan dalam perencanaan, pengorganisasian, dan pengelolaan operasional bisnis, menghadapi tantangan dunia bisnis.'
      },
      {
        gambar: 'assets/img/jursan/ak.jpg',
        judul: 'Akuntansi',
        text: 'Jurusan Akuntansi membekali siswa dengan keterampilan dalam pencatatan, pengelolaan, dan pelaporan keuangan. Siswa akan mempelajari dasar-dasar akuntansi, perpajakan, audit, serta manajemen keuangan.'
      },
      {
        gambar: 'assets/img/jursan/sc.jpg',
        judul: 'Keamanan Komputer',
        text: 'Jurusan Keamanan Komputer mempersiapkan siswa untuk menghadapi tantangan dalam melindungi sistem informasi dan data dari ancaman siber.'
      },
      {
        gambar: 'assets/img/jursan/ap.jpg',
        judul: 'Perkantoran',
        text: 'Jurusan Perkantoran membekali siswa dengan keterampilan dalam administrasi perkantoran, pengelolaan dokumen, pengaturan jadwal, dan komunikasi bisnis.'
      },
      {
        gambar: 'assets/img/jursan/ma.jpg',
        judul: 'Tata Niaga',
        text: 'Jurusan Tata Niaga menekankan pada keterampilan di bidang pemasaran, penjualan, dan pengelolaan bisnis. Siswa belajar tentang strategi pemasaran, manajemen penjualan, dan layanan pelanggan.'
      }
    ],
    perPage: 4,
    currentPage: 1,

    get totalPage() {
      return Math.ceil(this.jurusan.length / this.perPage);
    },

    get cardJurusan() {
      const start = (this.currentPage - 1) * this.perPage;
      const end = this.currentPage * this.perPage;
      return this.jurusan.slice(start, end);
    },

    changePage(page) {
      this.currentPage = page;
      // console.log("Current Page:", this.currentPage);
      // console.log("Items on current page:", this.cardJurusan);
    },

    prevPage() {
      if (this.currentPage > 1) {
        this.currentPage--;
      }
    },

    nextPage() {
      if (this.currentPage < this.totalPage) {
        this.currentPage++;
      }
    }

  };
};