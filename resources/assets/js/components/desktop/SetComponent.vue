<template>
    <aside>
        <div class="title">{{ trans.vars.DetailsProductSet.productsFrom }}</div>
        <div class="products">
            <div class="item" v-for="product in set.products">
                <a :href="'/' + $lang + '/' + product.type + '/catalog/' + product.category.alias + '/' + product.alias">
                    <img :src="'/images/products/set/' + getSetImage(product, set.id)" v-if="getSetImage(product, set.id) != false" />
                </a>
                <add-to-cart-set-product :product="product" :site="site"></add-to-cart-set-product>
            </div>
            <a href="#" data-toggle="modal" data-target="#modalShipping">{{ trans.vars.DetailsProductSet.shippingPaymentReturns }}</a>

        </div>
    </aside>


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
