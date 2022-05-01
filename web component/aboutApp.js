const aboutApp = document.createElement("template");
aboutApp.innerHTML = `
<section id="about" class="card p-3 mt-5 w-100">
  <div class="d-flex align-items-center">
    <i class="material-icons pe-2 text-dark fs-2">info</i>
    <span class="card-title text-dark font-weight-bold mb-0"
      >Tentang aplikasi PKH BANSOS</span
    >
  </div>
  <hr />
  <div class="card-body mt-1 p-0">
    <p class="text-dark mb-0 text-sm">
      <b>Sistem Informasi Pengelolaan Data Bantuan Sosial</b> yaitu
      <i>PKH BANSOS</i>. Merupakan Sistem Informasi yang digunakan untuk
      mengolah data khususnya untuk menentukan yang layak menerima
      Bantuan PKH menggunakan metode C4.5 dengan metode K - Means.
      Selain itu aplikasi ini digunakan laporan penelitian skripsi. dimana data yang akan ditampilkan dalam aplikasi ini yaitu terdiri dari beberapa pengelolaan data antara lain : <br>
      <div class="ps-3 mt-2 text-dark text-sm">
        <li><i>Data penduduk yang menerima Program Keluarga Harapan (PKH) 2022</i></li>
        <li><i>Data criteria yang menunjang penerima program PKH</i></li>
        <li><i>Data hasil perhitungan yang layak menerima program PKH menggunakan teknik klasifikasi</i></li>
        <li><i>Data hasil perhitungan yang layak menerima Program PKH menggunakan teknik clustering</i></li>
        <li><i>Pengolahan dari perhitungan kedua Metode akan menampilkan hasil performa dari kedua metode</i></li>
      </div>
    </p>
  </div>
</section>
`;

class AboutApp extends HTMLElement {
  constructor() {
    super();
    this._contents = new DocumentFragment();
    this._contents.appendChild(aboutApp.content.cloneNode(true));
  }
  connectedCallback() {
    this.appendChild(this._contents);
  }
}
window.customElements.define("about-app", AboutApp);
