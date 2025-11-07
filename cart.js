<script>
  let cart = [];
  let total = 0;

  function addToCart(product, price, size) {
    cart.push({ product, price, size });
    total += price;
    console.log("Cart:", cart); // 👉 For now just shows in console
    alert(`${product} (Size: ${size}) added to cart!`);
  }
</script>
