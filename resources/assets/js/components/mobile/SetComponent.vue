<template>

    <div class="products">
      <div class="item" v-for="product in set.products">
        <a :href="'/' + $lang + '/' + site + '/catalog/' + product.category.alias + '/' + product.alias">
            <img :src="'/images/products/set/' + getSetImage(product, set.id)" v-if="getSetImage(product, set.id) != false" />
        </a>
        <div class="descr">
         <a :href="'/' + $lang + '/' + site + '/catalog/' + product.category.alias + '/' + product.alias" class="nameProduct">
             {{ product.translation.name }}
         </a>
          <div class="price"><span>{{ product.personal_price.price }} </span><span>{{ product.personal_price.old_price }} {{ $currency }}</span></div>

          <add-to-cart-set-product-mob :product="product" :site="site"></add-to-cart-set-product-mob>
        </div>
      </div>
    </div>

</template>

<script>
import { bus } from '../../app';

export default {
    props: ['set', 'site'],
    data() {
        return {
            subproducts: [],
            chooseProducts: false,
            ammount: 0,
            notInStock: false,
            product: [],
            subproduct: [],
        };
    },
    mounted() {
    },
    methods: {
        getSetImage(product, setId){
            let ret = false;
            product.set_images.forEach(function(entry){
                if(setId == entry.set_id){
                    ret = entry.image;
                    return ret;
                }
            })
            return ret;
        },
    },
}
</script>

<style media="screen">
    .check.selectedRadio{
        background-image: url(/fronts_mobile/img/backgrounds/collSize.jpg) !important;
        color: #fff !important;
    }
</style>
