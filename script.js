document.addEventListener("DOMContentLoaded", function () {
  // Sepetimiz için boş bir dizi oluşturalım
  let cart = [];

  // Ürünleri sepete ekleme işlevi
  function addToCart(productName, price) {
    // Yeni bir ürün nesnesi oluşturalım
    const product = {
      name: productName,
      price: price,
    };

    // Ürünü sepete ekleyelim
    cart.push(product);

    // Sepetin güncellenmesi için gösterilmesi gereken bilgileri güncelleyelim
    updateCartInfo();
  }

  // Sepet bilgilerini güncelleme işlevi
  function updateCartInfo() {
    const totalItems = cart.length;
    let totalPrice = 0;

    // Sepetteki toplam fiyatı hesaplayalım
    cart.forEach(function (product) {
      totalPrice += product.price;
    });

    // Sepet bilgilerini HTML içeriğine güncelleyelim
    document.getElementById("cart-total-items").innerText = totalItems;
    document.getElementById("cart-total-price").innerText =
      totalPrice.toFixed(2);
  }

  // Tüm "Sepete Ekle" düğmelerini seçelim
  const addToCartButtons = document.querySelectorAll(".add-to-cart-btn");

  // Her bir "Sepete Ekle" düğmesi için tıklama olayını dinleyelim
  addToCartButtons.forEach(function (button) {
    button.addEventListener("click", function () {
      // Ürünün adını ve fiyatını alalım
      const productName = this.dataset.productName;
      const price = parseFloat(this.dataset.price);

      // Ürünü sepete ekleyelim
      addToCart(productName, price);
    });
  });
});
