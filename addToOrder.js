function addToOrder(btn){
    let product = [];
    if(localStorage.key('product')){
      product = JSON.parse(localStorage.getItem('product'));
    }
   product.push(btn.id);
  localStorage.setItem('product', JSON.stringify(product));
}