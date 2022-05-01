const cardRecap = document.createElement("template");
cardRecap.innerHTML = `
<div class="row">
<div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
  <div class="card">
    <div class="card-header p-3 pt-2">
      <div
        class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute"
      >
        <i class="material-icons opacity-10">elderly_woman</i>
      </div>
      <div class="text-end pt-1">
        <p class="text-sm mb-0 text-capitalize">lansia</p>
        <h4 class="mb-0">4</h4>
      </div>
    </div>
    <hr class="dark horizontal my-0" />
    <div class="card-footer p-3">
      <a class="text-dark text-sm font-weight-bold cursor-pointer">
        <div class="d-flex align-items-center">
          <span>Selengkapnya</span>
          <span class="material-icons ps-2">arrow_forward</span>
        </div>
      </a>
    </div>
  </div>
</div>
<div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
  <div class="card">
    <div class="card-header p-3 pt-2">
      <div
        class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute"
      >
        <i class="material-icons opacity-10">family_restroom</i>
      </div>
      <div class="text-end pt-1">
        <p class="text-sm mb-0 text-capitalize">
          Jumlah Tanggungan Anak
        </p>
        <h4 class="mb-0">9</h4>
      </div>
    </div>
    <hr class="dark horizontal my-0" />
    <div class="card-footer p-3">
      <a class="text-dark text-sm font-weight-bold cursor-pointer">
        <div class="d-flex align-items-center">
          <span>Selengkapnya</span>
          <span class="material-icons ps-2">arrow_forward</span>
        </div>
      </a>
    </div>
  </div>
</div>
<div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
  <div class="card">
    <div class="card-header p-3 pt-2">
      <div
        class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute"
      >
        <i class="material-icons opacity-10">pregnant_woman</i>
      </div>
      <div class="text-end pt-1">
        <p class="text-sm mb-0 text-capitalize">Ibu Hamil</p>
        <h4 class="mb-0">0</h4>
      </div>
    </div>
    <hr class="dark horizontal my-0" />
    <div class="card-footer p-3">
      <a class="text-dark text-sm font-weight-bold cursor-pointer">
        <div class="d-flex align-items-center">
          <span>Selengkapnya</span>
          <span class="material-icons ps-2">arrow_forward</span>
        </div>
      </a>
    </div>
  </div>
</div>
</div>
`;

class CardRecap extends HTMLElement {
  constructor() {
    super();
    this._contents = new DocumentFragment();
    this._contents.appendChild(cardRecap.content.cloneNode(true));
  }
  connectedCallback() {
    this.appendChild(this._contents);
  }
}

window.customElements.define("card-recap", CardRecap);
